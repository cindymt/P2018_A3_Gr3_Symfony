<?php
/**
 * Created by PhpStorm.
 * User: Nounoute
 * Date: 22/11/2015
 * Time: 12:32
 */

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;


class GradeAdmin extends Admin {

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('grade')
            ->add('lesson')
            ->add('user')
            ->add('comment')
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('grade')
            ->add('user')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->add('grade')
            ->add('lesson')
            ->add('user')
            ->add('comment')
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
            ->add('grade')
            ->add('lesson')
            ->add('user')
            ->add('comment')
        ;
    }

}