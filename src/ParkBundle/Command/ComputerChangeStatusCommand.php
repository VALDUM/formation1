<?php

namespace ParkBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class ComputerChangeStatusCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('park:computer:change')
            ->setDescription('Change all computers')
            ->addArgument(
                'status',
                InputArgument::OPTIONAL,
                'Status ?'
            )
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $sta = $input->getArgument('status');

        if (in_array($sta, array(0, 1))) {

            $ret = 0;

            $em = $this->getContainer()->get('doctrine')->getManager();

            $computers = $em->getRepository("ParkBundle:Computer")->findAll();

            foreach ($computers as $computer) {
                $computer->setEnabled($sta);
                $ret += 1;
            }

            $em->flush();

            if ($sta) {
                $output->writeln("All computers are enabled");
            } else {
                $output->writeln("All computers are disabled");
            }

            $output->writeln("Statut $sta / $ret");

        } else {

            $output->writeln("Statut passé en paramètre incorrect");

        }

    }
}