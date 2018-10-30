<?php
/**
 * =========================================================================
 *   Program:   CDash - Cross-Platform Dashboard System
 *   Module:    $Id$
 *   Language:  PHP
 *   Date:      $Date$
 *   Version:   $Revision$
 *   Copyright (c) Kitware, Inc. All rights reserved.
 *   See LICENSE or http://www.cdash.org/licensing/ for details.
 *   This software is distributed WITHOUT ANY WARRANTY; without even
 *   the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR
 *   PURPOSE. See the above copyright notices for more information.
 * =========================================================================
 */
namespace CDash\Lib\Collection;

use CDash\Model\Build;

class BuildCollection extends Collection
{
    /**
     * @param Build $build
     */
    public function add(Build $build)
    {
        $name = $build->SubProjectName ? $build->SubProjectName : $build->Name;
        parent::addItem($build, $name);
        return $this;
    }
}
