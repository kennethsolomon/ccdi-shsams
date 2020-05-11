# ccdi-shsams


#CREATE account_det View
CREATE VIEW account_det AS SELECT
account.*, per_files.*
FROM account, per_files
WHERE per_files.identification_number = account.usrid AND 
(per_files.per_status = "Administrator"
OR per_files.per_status = "Security Guard")
