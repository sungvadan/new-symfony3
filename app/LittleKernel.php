<?php


use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\HttpKernel\Kernel;

class LittleKernel extends Kernel
{
    use MicroKernelTrait;

    public function registerBundles()
    {
        return [
            new \Symfony\Bundle\FrameworkBundle\FrameworkBundle()

        ];
    }

    public function helloSymfony($version)
    {
        return new \Symfony\Component\HttpFoundation\Response('Hi symfony I\'m symfony'.$version);
    }

    protected function configureRoutes(\Symfony\Component\Routing\RouteCollectionBuilder $routes)
    {
        $routes->add('/hello/symfony/{version}', 'kernel:helloSymfony');
    }

    protected function configureContainer(\Symfony\Component\DependencyInjection\ContainerBuilder $c, \Symfony\Component\Config\Loader\LoaderInterface $loader)
    {
        $c->loadFromExtension('framework',[
           'secret' => 'micro0'
        ]);
    }


}