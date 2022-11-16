<?php

namespace Application\Controller;

use Application\Form\AutorForm;
use Application\Model\Autor;
use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Factory\FactoryInterface;

class KsiazkiControllerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $autor = $container->get(Autor::class);
        $autorForm = $container->get(AutorForm::class);

        return new KsiazkiController($autor, $autorForm);
    }
}