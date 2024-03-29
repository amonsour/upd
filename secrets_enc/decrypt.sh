#!/bin/sh
mkdir -p ../keys/
mkdir -p ../php/

gpg --quiet --batch --yes --decrypt --passphrase-file "passphrase.txt" \
--output ../keys/secret.pem ./keys/secret.pem.gpg

gpg --quiet --batch --yes --decrypt --passphrase-file "passphrase.txt" \
--output ../keys/secret.key ./keys/secret.key.gpg

gpg --quiet --batch --yes --decrypt --passphrase-file "passphrase.txt" \
--output ../keys/certificate.pem ./keys/certificate.pem.gpg

gpg --quiet --batch --yes --decrypt --passphrase-file "passphrase.txt" \
--output ../php/config.php ./php/config.php.gpg

gpg --quiet --batch --yes --decrypt --passphrase-file "passphrase.txt" \
--output ../php/config-at.php ./php/config-at.php.gpg

gpg --quiet --batch --yes --decrypt --passphrase-file "passphrase.txt" \
--output ../php/service-account-credentials.json ./php/service-account-credentials.json.gpg
