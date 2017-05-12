<?php

namespace App\Repositories\Permission\Dependency;

/**
 * Interface PermissionDependencyRepositoryContract.
 */
interface PermissionDependencyRepositoryContract
{
    /**
     * @param $permission_id
     * @param $dependency_id
     *
     * @return mixed
     */
    public function create($permission_id, $dependency_id);

    /**
     * @param $permission_id
     *
     * @return mixed
     */
    public function clear($permission_id);
}
