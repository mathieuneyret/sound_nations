<?php

namespace App\Controller\Admin;

use App\Entity\Typemembre;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class TypemembreCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Typemembre::class;
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
