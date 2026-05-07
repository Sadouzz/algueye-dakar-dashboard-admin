<?php

namespace App\Controller\Admin;

use App\Entity\Event;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class EventCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Event::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('slug', 'Slug (Identifiant)'),
            ChoiceField::new('category', 'Catégorie')->setChoices([
                'Défilés' => 'Défilés',
                'Expositions' => 'Expositions',
                'Ateliers' => 'Ateliers',
                'Ventes privées' => 'Ventes privées'
            ]),
            TextField::new('date', 'Jour (ex: 14)'),
            TextField::new('month', 'Mois (ex: Juin)'),
            TextField::new('year', 'Année (ex: 2025)'),
            TextField::new('title', 'Titre de l\'événement'),
            TextField::new('subtitle', 'Sous-titre'),
            TextField::new('location', 'Lieu'),
            TextField::new('city', 'Ville'),
            TextareaField::new('description', 'Description'),
            ChoiceField::new('status', 'Statut')->setChoices([
                'À venir' => 'À venir',
                'Passé' => 'Passé'
            ]),
            BooleanField::new('featured', 'Mis en avant'),
            ImageField::new('image', 'Image')
                ->setBasePath('/uploads/events')
                ->setUploadDir('public/uploads/events')
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired(false),
        ];
    }
}
