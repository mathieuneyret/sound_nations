<?php

namespace App\Controller\Admin;

use App\Entity\Artiste;
use App\Entity\Billeterie;
use App\Entity\Categorie;
use App\Entity\Concert;
use App\Entity\Jouer;
use App\Entity\Partenaire;
use App\Entity\Programme;
use App\Entity\Scene;
use App\Entity\Typemembre;
use App\Entity\Typemusical;
use App\Entity\Typepass;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Sound Nations');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Artistes ', 'fas fa-guitar', Artiste::class);
        yield MenuItem::linkToCrud('Billeterie', 'fas fa-ticket-alt', Billeterie::class);
        yield MenuItem::linkToCrud('Categorie Partenaires', 'fas fa-list', Categorie::class);
        yield MenuItem::linkToCrud('Concert', 'fas fa-list', Concert::class);
        yield MenuItem::linkToCrud('Jouer', 'fas fa-star', Jouer::class);
        yield MenuItem::linkToCrud('Partenaires', 'fas fa-hands-helping', Partenaire::class);
        yield MenuItem::linkToCrud('Programmes', 'fas fa-project-diagram', Programme::class);
        yield MenuItem::linkToCrud('Scenes', 'fas fa-microphone-alt', Scene::class);
        yield MenuItem::linkToCrud('Type membre', 'fas fa-user-tag',Typemembre::class);
        yield MenuItem::linkToCrud('Type musical', 'fas fa-music', Typemusical::class);
        yield MenuItem::linkToCrud('Type pass', 'fas fa-clone', Typepass::class);
        yield MenuItem::linkToCrud('User', 'fas fa-id-card', User::class);
        // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
    }
}
