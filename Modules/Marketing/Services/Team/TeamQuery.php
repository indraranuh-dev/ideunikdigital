<?php

namespace Modules\Marketing\Services\Team;

use Modules\Marketing\Entities\Team;

class TeamQuery extends Team
{
    /**
     * Get public teams
     *
     * @return void
     */
    public function getPublicTeams()
    {
        return Team::query()
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
        return Team::query()
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
        $teams = Team::query();

        // Check if props below is true/not empty
        if ($request->is_active) {
            // Search query
            $teams->isActive($request);
        }

        // Check if props below is true/not empty
        if ($request->search) {
            // Search query
            $teams->search($request);
        }

        return $teams->sort($request)->paginate($total);
    }
}