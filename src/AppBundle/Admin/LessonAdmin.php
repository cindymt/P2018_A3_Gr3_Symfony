<?php
/**
 * Created by PhpStorm.
 * User: Nounoute
 * Date: 22/11/2015
 * Time: 12:27
 */

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class LessonAdmin extends Admin {

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('title')
            ->add('summary')
            ->add('content')
            ->add('writer')
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('title')
            ->add('summary')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->add('title')
            ->add('summary')
            ->add('level')
            ->add('attack')
            ->add('defense')
        ;
    }

    /**
     * Fields to be shown on show action
     *
     * {@inheridoc}
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('name')
            ->add('hp')
            ->add('level')
            ->add('attack')
            ->add('defense')
            ->add('description')
            ->add('types')
            ->add('trainer')
        ;
    }
}