<?php
namespace AppBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class StylesPlayCommand extends Command
{
    protected function configure()
    {
        $this->setName('styles:play');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $style = new SymfonyStyle($input, $output);
        $style->title('Welcome to symfonyStyle');
        $style->section("wow look at this section");
        $style->text("Lorem ipsum dolor, Lorem ipsum dolor,Lorem ipsum dolorLorem ipsum dolorLorem ipsum dolor Lorem ipsum dolorLorem ipsum dolor");
        $style->note('sd qsdf qsd qsdf');
        $style->comment('fsq qsddf qs qsdf qsdf ');
        $style->comment("so dont use it");

        $style->section("How some Big message");
        $style->success('sdf sdf sdfs sdf ');
        $style->warning(' sdf sdf sdf sdf');
        $style->error('sdf sdf sdf sdf');
        $style->caution("sdf sdf");

        $style->section("Some tables and List");
        $style->table(
           ['User', 'Birthday'],
            [
                ['Phan','January 6th'],
                ['Ten','January 6th']
            ]
        );

        $style->section("VTP's favorite things");
        $style->listing([
            'Running',
            'Cooking'
        ]);

    }


}