<?php

namespace Modules\Marketing\Traits\Project;

trait Filterable
{
    /**
     * Handle query to get project with verified email or not
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
     * Handle query to find post service
     *
     * @param  Illuminate\Database\Eloquent\Builder $query
     * @param  object $request
     * @return void
     */

    public function scopeService($query, $request)
    {
        $request = (object) $request;
        return $query->whereHas('service', function ($query) use ($request) {
            $query->where('id', $request->service)
                ->orWhere('slug_name', $request->service);
        });
    }

    /**
     * Handle query to find post category
     *
     * @param  Illuminate\Database\Eloquent\Builder $query
     * @param  object $request
     * @return void
     */

    public function scopeCategory($query, $request)
    {
        $request = (object) $request;
        return $query->whereHas('category', function ($query) use ($request) {
            $query->where('id', $request->category)
                ->orWhere('slug_name', $request->category);
        });
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
                ->orWhere('description', 'like', '%' . $request->search . '%');
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