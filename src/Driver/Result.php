<?php

/*
 * This file is part of the nulxrd/hades.
 *
 * Copyright (C) 2024 Dominik Szamburski
 *
 * This software may be modified and distributed under the terms
 * of the MIT license. See the LICENSE file for details.
 */

namespace Hades\Driver;

interface Result
{
    /**
     * Fetches the next row from a result set.
     *
     * @return array<string, mixed>|false
     *  <b>Result::fetch</b> returns first value of result set or <b>FALSE</b> if there are no more rows.
     */
    public function fetch(): false|array;

    /**
     * Returns an array containing all the result set rows.
     *
     * @return array<string, mixed>
     *  <b>Result::fetchAll</b> returns an array containing rows in the result.
     */
    public function fetchAll(): array;

    /**
     * Returns the number of rows affected by the last SQL statement.
     *
     * @return int
     *  The number of rows.
     */
    public function rowCount(): int;

    /**
     * Returns the number of columns in the result.
     *
     * @return int
     *  The number of columns in the result. If the columns cannot be counted, <b>Result::columnCount</b> return 0.
     */
    public function columnCount(): int;
}
