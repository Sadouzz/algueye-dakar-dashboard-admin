<?php

namespace App\Controller\Admin;

use App\Entity\CollectionCustom;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class CollectionCustomCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return CollectionCustom::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('slug', 'Identifiant unique (ex: haute-couture)'),
            TextField::new('title', 'Titre'),
            TextField::new('subtitle', 'Sous-titre'),
            TextField::new('miniTitleWithBar', 'Mini Titre avec barre'),
            TextareaField::new('content', 'Contenu'),
            ArrayField::new('keysList', 'Mots clés (Keys)')->setHelp('Ajoutez un mot clé et appuyez sur Entrée'),
            ImageField::new('img', 'Image')
                ->setBasePath('/uploads/collections')
                ->setUploadDir('public/uploads/collections')
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired(false),
        ];
    }
}
