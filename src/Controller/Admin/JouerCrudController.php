<?php

namespace App\Controller\Admin;

use App\Entity\Jouer;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class JouerCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Jouer::class;
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
