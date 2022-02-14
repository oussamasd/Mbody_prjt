<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220214130054 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE image_act_ex ADD activity_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE image_act_ex ADD CONSTRAINT FK_C60C16A381C06096 FOREIGN KEY (activity_id) REFERENCES activity (id)');
        $this->addSql('CREATE INDEX IDX_C60C16A381C06096 ON image_act_ex (activity_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE activity CHANGE nom_act nom_act VARCHAR(50) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description_act description_act VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE category CHANGE nom_cat nom_cat VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE exercice CHANGE nom_exercice nom_exercice VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE dure_exercice dure_exercice VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description_exercice description_exercice VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE image_act_ex DROP FOREIGN KEY FK_C60C16A381C06096');
        $this->addSql('DROP INDEX IDX_C60C16A381C06096 ON image_act_ex');
        $this->addSql('ALTER TABLE image_act_ex DROP activity_id, CHANGE image_url image_url VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
