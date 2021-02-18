<?php

namespace App\Controller\Admin;

use App\Entity\Billeterie;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;

class BilleterieCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Billeterie::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            AssociationField::new('idpass'),
            AssociationField::new('iduser'),
            DateTimeField::new('dateachat'),
        ];
    }
    
}
