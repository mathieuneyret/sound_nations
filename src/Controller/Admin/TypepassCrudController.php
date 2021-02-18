<?php

namespace App\Controller\Admin;

use App\Entity\Typepass;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class TypepassCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Typepass::class;
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
