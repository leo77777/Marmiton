<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200622085823 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE etapes ADD recette_id INT NOT NULL');
        $this->addSql('ALTER TABLE etapes ADD CONSTRAINT FK_E3443E1789312FE9 FOREIGN KEY (recette_id) REFERENCES recettes (id)');
        $this->addSql('CREATE INDEX IDX_E3443E1789312FE9 ON etapes (recette_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE etapes DROP FOREIGN KEY FK_E3443E1789312FE9');
        $this->addSql('DROP INDEX IDX_E3443E1789312FE9 ON etapes');
        $this->addSql('ALTER TABLE etapes DROP recette_id');
    }
}
