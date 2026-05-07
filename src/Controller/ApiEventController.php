<?php

namespace App\Controller;

use App\Repository\EventRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/api', name: 'api_')]
class ApiEventController extends AbstractController
{
    #[Route('/events', name: 'events_index', methods: ['GET'])]
    public function index(EventRepository $repository): JsonResponse
    {
        $events = $repository->findAll();
        
        $data = [];
        foreach ($events as $event) {
            $data[] = [
                'id' => $event->getId(),
                'slug' => $event->getSlug(),
                'category' => $event->getCategory(),
                'date' => $event->getDate(),
                'month' => $event->getMonth(),
                'year' => $event->getYear(),
                'title' => $event->getTitle(),
                'subtitle' => $event->getSubtitle(),
                'location' => $event->getLocation(),
                'city' => $event->getCity(),
                'description' => $event->getDescription(),
                'status' => $event->getStatus(),
                'featured' => $event->isFeatured(),
                'image' => $event->getImage() ? '/uploads/events/' . $event->getImage() : null,
            ];
        }

        return $this->json($data);
    }
}
