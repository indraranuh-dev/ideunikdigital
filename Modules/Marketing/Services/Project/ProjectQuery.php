<?php

namespace Modules\Marketing\Services\Project;

use Modules\Marketing\Entities\Project;

class ProjectQuery extends Project
{
    /**
     * Get public projects
     *
     * @return void
     */
    public function getPublicProjects($paginate = 4)
    {
        return Project::query()
            ->where('is_active', 1)
            ->paginate($paginate);
    }

    /**
     * Get last position of testimonials
     *
     * @return void
     */
    public function getLastPosition()
    {
        return Project::query()
            ->getLastPosition()->first();
    }

    /**
     * Filter query
     * Use by calling static method and pass the request on array
     *
     * @param  object $request
     * @param  int $total
     * @return void
     */
    public function filters(object $request, $total = 10)
    {
        $projects = Project::query();

        if (property_exists($request, 'category')) {
            if ($request->category) {
                // Search query
                $projects->category($request);
            }
        }

        if (property_exists($request, 'service')) {
            if ($request->service) {
                // Search query
                $projects->service($request);
            }
        }

        if (property_exists($request, 'is_active')) {
            if ($request->is_active) {
                // Search query
                $projects->isActive($request);
            }
        }

        if (property_exists($request, 'search')) {
            // Check if props below is true/not empty
            if ($request->search) {
                // Search query
                $projects->search($request);
            }
        }

        return $projects->sort($request)->paginate($total);
    }
}