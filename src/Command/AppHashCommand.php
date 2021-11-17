<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use App\Controller\AppHashController;

class AppHashCommand extends Command
{

    protected static $defaultName = 'app:hash';
    protected static $defaultDescription = 'Comando que gera um hash';
    private $appHash;

    public function __construct(AppHashController $appHash)
    {
        $this->appHash = $appHash;

        parent::__construct();
    }

    protected function configure(): void
    {
        $this
        ->setDescription('Gerar hash !')
            ->addArgument('string', InputArgument::REQUIRED, 'String gera hash')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $string = $input->getArgument('string');

        $hashPronta = $this->appHash->hash($string);

        if ($string) {
            $io->note(sprintf('Voce digitou: %s', $string));
        }
        
        $io->success(sprintf('Hash gerada com sucesso: %s', $hashPronta));


        return Command::SUCCESS;
    }
}
