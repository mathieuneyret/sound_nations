<?php

namespace App\Controller\Admin;

use App\Entity\Programme;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ProgrammeCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Programme::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            AssociationField::new('idconcert'),
            DateTimeField::new('horaire'),
            IntegerField::new('idscene'),
            AssociationField::new('idtype'),
            TextField::new('description'),
        ];
    }
    
}
