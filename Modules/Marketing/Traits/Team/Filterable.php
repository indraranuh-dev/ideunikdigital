<?php

namespace Modules\Marketing\Traits\Team;

trait Filterable
{
    /**
     * Handle query to get team with verified email or not
     *
     * @param  Illuminate\Database\Eloquent\Builder $query
     * @param  object $request
     * @return void
     */
    public function scopeIsActive($query, $request)
    {
        $request = (object) $request;

        if ($request->is_active == 'true') {
            return $query->where('is_active', 1);
        }

        if ($request->is_active == 'false') {
            return $query->where('is_active', 0);
        }
    }

    /**
     * Handle query to get last position
     *
     * @param  Illuminate\Database\Eloquent\Builder $query
     * @return void
     */
    public function scopeGetLastPosition($query)
    {
        return $query->orderBy('position', 'desc');
    }

    /**
     * Handle query to find in the table
     *
     * @param  Illuminate\Database\Eloquent\Builder $query
     * @param  object $request
     * @return void
     */
    public function scopeSearch($query, $request)
    {
        $request = (object) $request;

        return $query->where(function ($query) use ($request) {
            $query->where('name', 'like', '%' . $request->search . '%')
                ->orWhere('job_title', 'like', '%' . $request->search . '%');
        });
    }

    /**
     * Handle query to find in the table
     *
     * @param  Illuminate\Database\Eloquent\Builder $query
     * @param  object $request
     * @return void
     */
    public function scopeSort($query, $request)
    {
        $request = (object) $request;
        $columns = $query->getModel()->getFillable();

        // Check if column is exist in database table column
        // Handle errors column not found
        if (in_array($request->sort, $columns)) {

            // Check if order like asc or desc
            // Data will only show if column is available and order is available
            if ($request->order == 'asc' || $request->order == 'desc') {
                $query->orderBy($request->sort, $request->order);
            }

        } else {
            // If column found, will return empty array
            return $query;
        }

    }
}