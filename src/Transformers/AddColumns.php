<?php

/**
 * @author      Wizacha DevTeam <dev@wizacha.com>
 * @copyright   Copyright (c) Wizacha
 * @copyright   Copyright (c) Leonardo Marquine
 * @license     MIT
 */

declare(strict_types=1);

namespace Wizaplace\Etl\Transformers;

use Wizaplace\Etl\Row;

class AddColumns extends Transformer
{
    /**
     * Transformer columns.
     *
     * @var string[]
     */
    protected $columns = [];

    /**
     * Properties that can be set via the options method.
     *
     * @var string[]
     */
    protected $availableOptions = ['columns', 'callback'];

    /**
     * Initialize the step.
     */
    public function initialize(): void
    {
    }

    /**
     * Transform the given row.
     */
    public function transform(Row $row): void
    {
        foreach( $this->columns as $key => $val ) {
            $row[ $key ] = $val;
        }
    }

}
