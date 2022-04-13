<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220413111832 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE employer (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, work_mobile VARCHAR(255) NOT NULL, work_email VARCHAR(255) NOT NULL, societe VARCHAR(255) NOT NULL, departement VARCHAR(255) NOT NULL, job VARCHAR(255) NOT NULL, respensable VARCHAR(255) NOT NULL, leave_manager VARCHAR(255) NOT NULL, resource_calender VARCHAR(255) NOT NULL, contract_date_debut DATE NOT NULL, contract_date_fin DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE employer_conge (employer_id INT NOT NULL, conge_id INT NOT NULL, INDEX IDX_64AC3C7141CD9E7A (employer_id), INDEX IDX_64AC3C71CAAC9A59 (conge_id), PRIMARY KEY(employer_id, conge_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE employer_conge ADD CONSTRAINT FK_64AC3C7141CD9E7A FOREIGN KEY (employer_id) REFERENCES employer (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE employer_conge ADD CONSTRAINT FK_64AC3C71CAAC9A59 FOREIGN KEY (conge_id) REFERENCES conge (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE employer_conge DROP FOREIGN KEY FK_64AC3C7141CD9E7A');
        $this->addSql('DROP TABLE employer');
        $this->addSql('DROP TABLE employer_conge');
    }
}
