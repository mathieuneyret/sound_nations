<?php

namespace App\Controller\Admin;

use App\Entity\Typemusical;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class TypemusicalCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Typemusical::class;
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
