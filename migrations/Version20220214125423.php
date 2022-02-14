<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220214125423 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE activity_exercice (activity_id INT NOT NULL, exercice_id INT NOT NULL, INDEX IDX_4412774381C06096 (activity_id), INDEX IDX_4412774389D40298 (exercice_id), PRIMARY KEY(activity_id, exercice_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE activity_exercice ADD CONSTRAINT FK_4412774381C06096 FOREIGN KEY (activity_id) REFERENCES activity (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE activity_exercice ADD CONSTRAINT FK_4412774389D40298 FOREIGN KEY (exercice_id) REFERENCES exercice (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE activity_exercice');
        $this->addSql('ALTER TABLE activity CHANGE nom_act nom_act VARCHAR(50) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description_act description_act VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE category CHANGE nom_cat nom_cat VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE exercice CHANGE nom_exercice nom_exercice VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE dure_exercice dure_exercice VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description_exercice description_exercice VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE image_act_ex CHANGE image_url image_url VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
