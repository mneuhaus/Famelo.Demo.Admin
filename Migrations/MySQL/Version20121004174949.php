<?php
namespace TYPO3\Flow\Persistence\Doctrine\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
	Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your need!
 */
class Version20121004174949 extends AbstractMigration {

	/**
	 * @param Schema $schema
	 * @return void
	 */
	public function up(Schema $schema) {
			// this up() migration is autogenerated, please modify it to your needs
		$this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql");
		
		$this->addSql("ALTER TABLE demo_admin_domain_model_inline DROP FOREIGN KEY FK_7E9F4F1589232051");
		$this->addSql("ALTER TABLE demo_admin_domain_model_inline DROP FOREIGN KEY FK_7E9F4F15B8BA99B4");
		$this->addSql("ALTER TABLE demo_admin_domain_model_inline_addressesstacked_join DROP FOREIGN KEY FK_DEB59BCCC972ED08");
		$this->addSql("ALTER TABLE demo_admin_domain_model_inline_addressestabular_join DROP FOREIGN KEY FK_6A6456BEC972ED08");
		$this->addSql("ALTER TABLE demo_admin_domain_model_widgets DROP FOREIGN KEY FK_D36A9387D4E6F81");
		$this->addSql("ALTER TABLE demo_admin_domain_model_widgets_addresses_join DROP FOREIGN KEY FK_3789F1A1C972ED08");
		$this->addSql("ALTER TABLE demo_admin_domain_model_inline_addressesstacked_join DROP FOREIGN KEY FK_DEB59BCC15A36C0E");
		$this->addSql("ALTER TABLE demo_admin_domain_model_inline_addressestabular_join DROP FOREIGN KEY FK_6A6456BE15A36C0E");
		$this->addSql("ALTER TABLE demo_admin_domain_model_widgets_addresses_join DROP FOREIGN KEY FK_3789F1A159646648");
		$this->addSql("CREATE TABLE famelo_demo_admin_domain_model_address (persistence_object_identifier VARCHAR(40) NOT NULL, street VARCHAR(255) NOT NULL, housenumber VARCHAR(255) NOT NULL, zip VARCHAR(255) NOT NULL, city VARCHAR(255) NOT NULL, country VARCHAR(255) NOT NULL, PRIMARY KEY(persistence_object_identifier)) ENGINE = InnoDB");
		$this->addSql("DROP TABLE demo_admin_domain_model_address");
		$this->addSql("DROP TABLE demo_admin_domain_model_inline");
		$this->addSql("DROP TABLE demo_admin_domain_model_inline_addressesstacked_join");
		$this->addSql("DROP TABLE demo_admin_domain_model_inline_addressestabular_join");
		$this->addSql("DROP TABLE demo_admin_domain_model_widgets");
		$this->addSql("DROP TABLE demo_admin_domain_model_widgets_addresses_join");
	}

	/**
	 * @param Schema $schema
	 * @return void
	 */
	public function down(Schema $schema) {
			// this down() migration is autogenerated, please modify it to your needs
		$this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql");
		
		$this->addSql("CREATE TABLE demo_admin_domain_model_address (flow3_persistence_identifier VARCHAR(40) NOT NULL, street VARCHAR(255) NOT NULL, housenumber VARCHAR(255) NOT NULL, zip VARCHAR(255) NOT NULL, city VARCHAR(255) NOT NULL, country VARCHAR(255) NOT NULL, PRIMARY KEY(flow3_persistence_identifier)) ENGINE = InnoDB");
		$this->addSql("CREATE TABLE demo_admin_domain_model_inline (flow3_persistence_identifier VARCHAR(40) NOT NULL, addressstacked VARCHAR(40) DEFAULT NULL, addresstabular VARCHAR(40) DEFAULT NULL, INDEX IDX_7E9F4F1589232051 (addressstacked), INDEX IDX_7E9F4F15B8BA99B4 (addresstabular), PRIMARY KEY(flow3_persistence_identifier)) ENGINE = InnoDB");
		$this->addSql("CREATE TABLE demo_admin_domain_model_inline_addressesstacked_join (admin_inline VARCHAR(40) NOT NULL, admin_address VARCHAR(40) NOT NULL, INDEX IDX_DEB59BCC15A36C0E (admin_inline), INDEX IDX_DEB59BCCC972ED08 (admin_address), PRIMARY KEY(admin_inline, admin_address)) ENGINE = InnoDB");
		$this->addSql("CREATE TABLE demo_admin_domain_model_inline_addressestabular_join (admin_inline VARCHAR(40) NOT NULL, admin_address VARCHAR(40) NOT NULL, INDEX IDX_6A6456BE15A36C0E (admin_inline), INDEX IDX_6A6456BEC972ED08 (admin_address), PRIMARY KEY(admin_inline, admin_address)) ENGINE = InnoDB");
		$this->addSql("CREATE TABLE demo_admin_domain_model_widgets (flow3_persistence_identifier VARCHAR(40) NOT NULL, address VARCHAR(40) DEFAULT NULL, string VARCHAR(255) NOT NULL, boolean TINYINT(1) NOT NULL, date DATETIME NOT NULL, time DATETIME NOT NULL, datetime DATETIME NOT NULL, textarea VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX flow3_identity_demo_admin_domain_model_widgets (string), INDEX IDX_D36A9387D4E6F81 (address), PRIMARY KEY(flow3_persistence_identifier)) ENGINE = InnoDB");
		$this->addSql("CREATE TABLE demo_admin_domain_model_widgets_addresses_join (admin_widgets VARCHAR(40) NOT NULL, admin_address VARCHAR(40) NOT NULL, INDEX IDX_3789F1A159646648 (admin_widgets), INDEX IDX_3789F1A1C972ED08 (admin_address), PRIMARY KEY(admin_widgets, admin_address)) ENGINE = InnoDB");
		$this->addSql("ALTER TABLE demo_admin_domain_model_inline ADD CONSTRAINT FK_7E9F4F1589232051 FOREIGN KEY (addressstacked) REFERENCES demo_admin_domain_model_address (flow3_persistence_identifier)");
		$this->addSql("ALTER TABLE demo_admin_domain_model_inline ADD CONSTRAINT FK_7E9F4F15B8BA99B4 FOREIGN KEY (addresstabular) REFERENCES demo_admin_domain_model_address (flow3_persistence_identifier)");
		$this->addSql("ALTER TABLE demo_admin_domain_model_inline_addressesstacked_join ADD CONSTRAINT FK_DEB59BCC15A36C0E FOREIGN KEY (admin_inline) REFERENCES demo_admin_domain_model_inline (flow3_persistence_identifier)");
		$this->addSql("ALTER TABLE demo_admin_domain_model_inline_addressesstacked_join ADD CONSTRAINT FK_DEB59BCCC972ED08 FOREIGN KEY (admin_address) REFERENCES demo_admin_domain_model_address (flow3_persistence_identifier)");
		$this->addSql("ALTER TABLE demo_admin_domain_model_inline_addressestabular_join ADD CONSTRAINT FK_6A6456BE15A36C0E FOREIGN KEY (admin_inline) REFERENCES demo_admin_domain_model_inline (flow3_persistence_identifier)");
		$this->addSql("ALTER TABLE demo_admin_domain_model_inline_addressestabular_join ADD CONSTRAINT FK_6A6456BEC972ED08 FOREIGN KEY (admin_address) REFERENCES demo_admin_domain_model_address (flow3_persistence_identifier)");
		$this->addSql("ALTER TABLE demo_admin_domain_model_widgets ADD CONSTRAINT FK_D36A9387D4E6F81 FOREIGN KEY (address) REFERENCES demo_admin_domain_model_address (flow3_persistence_identifier)");
		$this->addSql("ALTER TABLE demo_admin_domain_model_widgets_addresses_join ADD CONSTRAINT FK_3789F1A159646648 FOREIGN KEY (admin_widgets) REFERENCES demo_admin_domain_model_widgets (flow3_persistence_identifier)");
		$this->addSql("ALTER TABLE demo_admin_domain_model_widgets_addresses_join ADD CONSTRAINT FK_3789F1A1C972ED08 FOREIGN KEY (admin_address) REFERENCES demo_admin_domain_model_address (flow3_persistence_identifier)");
		$this->addSql("DROP TABLE famelo_demo_admin_domain_model_address");
	}
}

?>