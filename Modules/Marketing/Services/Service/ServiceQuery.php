<?php

namespace Modules\Marketing\Services\Service;

use Modules\Marketing\Entities\Service;

class ServiceQuery extends Service
{
    /**
     * Get public services
     *
     * @return void
     */
    public function getPublicServices()
    {
        return Service::query()
            ->where('is_active', 1)
            ->orderBy('position')
            ->get();
    }

    /**
     * Get last position of testimonials
     *
     * @return void
     */
    public function getLastPosition()
    {
        return Service::query()
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
        $services = Service::query();

        // Check if props below is true/not empty
        if ($request->is_active) {
            // Search query
            $services->isActive($request);
        }

        // Check if props below is true/not empty
        if ($request->search) {
            // Search query
            $services->search($request);
        }

        return $services->sort($request)->paginate($total);
    }
}
