all:
	@echo "Available targets:"
	@echo "deploy, shutdown, destroy, prerequisites, edit-vault, use-inventory01"

deploy:
	ansible-playbook clt_lab.yml --vault-password-file vault_pass.txt

shutdown:
	ansible-playbook shutdown.yml --vault-password-file vault_pass.txt

destroy:
	ansible-playbook destroy.yml --vault-password-file vault_pass.txt

prerequisites:
	ansible-playbook prerequisites.yml --vault-password-file vault_pass.txt

edit-vault:
	ansible-vault edit --vault-password-file vault_pass.txt awscreds.yml

use-inventory01:
	@cp -a attendee_01/inventory ../
	@cp -a attendee_01/key.pem ../
	@cp -a attendee_01/connect-db.sh ../
	@cp -a attendee_01/connect-web.sh ../
	@chmod 0600 ../key.pem
	@chmod 0700 ../connect-db.sh ../connect-web.sh
	@echo "export ANSIBLE_CONFIG=\$$(pwd)"
