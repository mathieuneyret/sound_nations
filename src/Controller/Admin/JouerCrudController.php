<?php

namespace App\Controller\Admin;

use App\Entity\Jouer;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;

class JouerCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Jouer::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            AssociationField::new('idscene'),
            AssociationField::new('idartiste'),
            AssociationField::new('idconcert'),
            DateField::new('dateconcert'),
            DateTimeField::new('heureconcert'),
        ];
    }
    
}
