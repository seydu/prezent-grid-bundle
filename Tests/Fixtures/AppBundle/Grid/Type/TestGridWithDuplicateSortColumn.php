<?php

namespace Prezent\GridBundle\Tests\Fixtures\AppBundle\Grid\Type;


use Prezent\Grid\BaseGridType;
use Prezent\Grid\Extension\Core\Type;
use Prezent\Grid\GridBuilder;

/**
 * @author Saidou Gueye
 */
class TestGridWithDuplicateSortColumn extends BaseGridType
{
    /**
     * {@inheritDoc}
     */
    public function buildGrid(GridBuilder $builder, array $options = [])
    {
        $builder
            ->addColumn('id', Type\StringType::class, [
                'label' => 'grid.id',
                'route' => 'view',
                'route_parameters' => ['id' => '{id}'],
            ])
            ->addColumn('name', Type\StringType::class, [
                'label' => 'grid.name',
                'sortable' => true,
                'sort_field' => 'custom_field',
            ])
            ->addColumn('title', Type\StringType::class, [
                'label' => 'title',
                'sortable' => true,
                'sort_field' => 'custom_field',
            ])
        ;
    }
}
