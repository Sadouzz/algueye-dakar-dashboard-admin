<?php

namespace App\Controller;

use App\Repository\CollectionCustomRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/api', name: 'api_')]
class ApiCollectionController extends AbstractController
{
    #[Route('/collections', name: 'collections_index', methods: ['GET'])]
    public function index(CollectionCustomRepository $repository): JsonResponse
    {
        $collections = $repository->findAll();
        
        $data = [];
        foreach ($collections as $collection) {
            $data[] = [
                'id' => $collection->getSlug(), // On garde l'ID comme string pour React
                'title' => $collection->getTitle(),
                'subtitle' => $collection->getSubtitle(),
                'content' => $collection->getContent(),
                'keys' => $collection->getKeysList(),
                'miniTitleWithBar' => $collection->getMiniTitleWithBar(),
                // Si l'image est stockée via EasyAdmin, on renvoie l'URL absolue ou relative
                'img' => $collection->getImg() ? '/uploads/collections/' . $collection->getImg() : null,
                // 'projects' => [] // À gérer plus tard si tu as une entité Tenue
            ];
        }

        return $this->json($data);
    }
}
