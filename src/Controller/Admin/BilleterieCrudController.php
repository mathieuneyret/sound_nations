<?php

namespace App\Controller\Admin;

use App\Entity\Billeterie;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class BilleterieCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Billeterie::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
