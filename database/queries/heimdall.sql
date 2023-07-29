# For prod, we have to switch from password to google_oauth for RZP org

# ORG

INSERT INTO `orgs` (`id`, `business_name`, `display_name`, `email`, `auth_type`, `email_domains`, `allow_sign_up`, `login_logo_url`, `main_logo_url`, `invoice_logo_url`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	('100000razorpay','Razorpay','Razorpay Software Private Ltd','admin@razorpay.com','google_auth','razorpay.com',1,NULL,NULL,NULL,1481813109,1481813109,NULL),
	('6dLbNSpv5XbCOG','HDFC','HDFC Bank Pvt Ltd','hdfc@bank.rzp.in','password','hdfcbank.in',0,NULL,NULL,NULL,1481813109,1481813109,NULL);

# ORG HOSTNAME

INSERT INTO `org_hostname` (`id`, `org_id`, `hostname`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(1,'100000razorpay','dashboard.razorpay.com',1481813109,1481813109,NULL),
	(2,'100000razorpay','beta-dashboard.razorpay.com',1481813109,1481813109,NULL),
  (3,'100000razorpay','dashboard.razorpay.in',1481813109,1481813109,NULL),
	(4,'6dLbNSpv5XbCOG','dashboard-hdfc.razorpay.in',1481813109,1481813109,NULL);

# ADMINS

INSERT INTO `admins` (`id`, `org_id`, `email`, `name`, `username`, `password`, `remember_token`, `oauth_access_token`, `oauth_provider_id`, `user_type`, `employee_code`, `branch_code`, `department_code`, `supervisor_code`, `location_code`, `disabled`, `allow_all_merchants`, `locked`, `old_passwords`, `last_login_at`, `failed_attempts`, `password_expiry`, `password_changed_at`, `expired_at`, `created_at`, `updated_at`, `deleted_at`)
VALUES
  ('6dLbNSpv5Ybbbb','6dLbNSpv5XbCOG','rzp@hdfcbank.in','Test HDFC Account','rzp','$2y$10$hq9FiWfdGNQYrMLhFIcHFeTugK3prV0Y6ghWC5AKuDQKNVS4Xx4SG',NULL,NULL,NULL,NULL,'010','HDFC010','ADMIN','001','BLR',0,1,0,NULL,1482364800,0,NULL,NULL,NULL,1482364800,1482364800,NULL),
  ('6dLbNSpv5Ycccc','100000razorpay','rishabh.pugalia@razorpay.com','Rishabh Pugalia','rishabhp',NULL,NULL,NULL,NULL,NULL,'001','RZP001','ADMIN','001','BLR',0,1,0,NULL,NULL,0,NULL,NULL,NULL,1482364800,1482364800,NULL);

# GROUPS

INSERT INTO `groups` (`id`, `org_id`, `name`, `description`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	('6euDnqS4zQR4ke','6dLbNSpv5XbCOG','Karnataka','Karnataka Group',1481813109,1481813109,NULL),
	('6euDnqS4zQR4kf','6dLbNSpv5XbCOG','Bangalore','Bangalore Group',1481813109,1481813109,NULL),
	('6euDnqS4zQR4kg','6dLbNSpv5XbCOG','Indiranagar','Indiranagar Group',1481813109,1481813109,NULL),
	('DQUM0vXtlSBaJp','6dLbNSpv5XbCOG','Some name six','Some description',1481813110,1481813110,NULL),
	('HAg9V9NnyLMepb','6dLbNSpv5XbCOG','Some name eight','Some description',1481813110,1481813110,NULL),
	('HEMH803EQRhLGK','6dLbNSpv5XbCOG','Some name five','Some description',1481813110,1481813110,NULL),
	('JpSuVlMR67O1J7','6dLbNSpv5XbCOG','Some name three','Some description',1481813110,1481813110,NULL),
	('TDjd5yjJ6oL8qe','6dLbNSpv5XbCOG','Some name four','Some description',1481813110,1481813110,NULL),
	('ZKXuBlfuwy3LpA','6dLbNSpv5XbCOG','Some name seven','Some description',1481813110,1481813110,NULL),
	('df3AhChTlBtDEq','6dLbNSpv5XbCOG','Some name nine','Some description',1481813110,1481813110,NULL),
	('hEJJyhYr35v71S','6dLbNSpv5XbCOG','Some name one','Some description',1481813110,1481813110,NULL),
	('nh9Ixjoj22MdRk','6dLbNSpv5XbCOG','Some name two','Some description',1481813110,1481813110,NULL);

# GROUP MAP

INSERT INTO `group_map` (`group_id`, `entity_id`, `entity_type`)
VALUES
	('6euDnqS4zQR4ke','6dLbNSpv5Ybbbb','admin'),
	('6euDnqS4zQR4ke','6euDnqS4zQR4kf','group'),
	('6euDnqS4zQR4kf','6euDnqS4zQR4kg','group'),
	('DQUM0vXtlSBaJp','HAg9V9NnyLMepb','group'),
	('DQUM0vXtlSBaJp','JpSuVlMR67O1J7','group'),
	('DQUM0vXtlSBaJp','ZKXuBlfuwy3LpA','group'),
	('JpSuVlMR67O1J7','TDjd5yjJ6oL8qe','group'),
	('TDjd5yjJ6oL8qe','HEMH803EQRhLGK','group'),
	('df3AhChTlBtDEq','DQUM0vXtlSBaJp','group'),
	('hEJJyhYr35v71S','nh9Ixjoj22MdRk','group'),
	('nh9Ixjoj22MdRk','JpSuVlMR67O1J7','group');

# ROLES

INSERT INTO `roles` (`id`, `name`, `description`, `org_id`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	('6dLbNSpv5XbC5E','SuperAdmin','Super Administrator','100000razorpay',1481813109,1481813109,NULL),
	('6dLbNSpv5XbC5F','SuperAdmin','Super Administrator','6dLbNSpv5XbCOG',1481813109,1481813109,NULL);


# ROLE MAPS

INSERT INTO `role_map` (`role_id`, `entity_id`, `entity_type`)
VALUES
	('6dLbNSpv5XbC5E','6dLbNSpv5Ycccc','admin'),
	('6dLbNSpv5XbC5F','6dLbNSpv5Ybbbb','admin');


# PERMISSIONS

INSERT INTO `permissions` (`id`, `name`, `category`, `description`, `created_at`, `updated_at`)
VALUES
	('0MLsYmZHnM4uWm','edit_merchant_features','merchant_detail','',1481813110,1481813110),
	('0s8CPPkTujecs3','make_api_call','merchant_detail','',1481813110,1481813110),
	('2HLQS76YC6dYp5','delete_admin','admin','Delete admin',1481813110,1481813110),
	('2Zhuwx46WLj4N5','edit_merchant_unlock_activation','merchant_detail','',1481813110,1481813110),
	('5K3Il2uu2WxM23','view_merchant_features','merchant_detail','',1481813110,1481813110),
	('6lMLpbU6qpPatq','create_settlement_initiate','merchant_detail','',1481813110,1481813110),
	('6sn4wiwDIgg8kV','edit_merchant_hold_funds','merchant_detail','',1481813110,1481813110),
	('78mVF43Tt6aQfA','view_networks','merchant_detail','',1481813110,1481813110),
	('79hWzNrfXeiUwn','view_activation_form','merchant_detail','',1481813110,1481813110),
	('83UgcC9ZytPGMF','edit_merchant_enable_receipt','merchant_detail','',1481813110,1481813110),
	('9LSFLoW9tSEGiL','edit_merchant_disable_receipt','merchant_detail','',1481813110,1481813110),
	('9nTlqBede8jajD','edit_merchant_terminal','merchant_detail','',1481813110,1481813110),
	('A59EXOzWMUijca','delete_merchant_credits','merchant_detail','',1481813110,1481813110),
	('AL9E0nTYvHBvAQ','view_all_role','role','View all roles',1481813110,1481813110),
	('ANqlHHe72arEya','view_refund_payments','merchant_detail','',1481813110,1481813110),
	('CyVJRRDNssUlHM','delete_group','group','Delete group',1481813110,1481813110),
	('DD07gwj8ijsGJP','view_auditlog','auditlog','View auditlog for activities',1481813110,1481813110),
	('DijwaBhTNB6w8c','edit_merchant_methods','merchant_detail','',1481813110,1481813110),
	('E74qu36BAV5ogx','add_reconciliation_file','merchant_detail','',1481813110,1481813110),
	('E9ETnrBjjrtxCZ','view_merchant_screenshot','merchant_detail','',1481813110,1481813110),
	('EUfHqs2IarCr8t','view_merchant_referrer','merchant_detail','',1481813110,1481813110),
	('El8JYjvN5FefDF','view_merchant_bank_accounts','merchant_detail','',1481813110,1481813110),
	('FThWSrodJ3rUgo','schedule_create','merchant_detail','',1481813110,1481813110),
	('FnSlf2E5qLeLP1','schedule_migration','merchant_detail','',1481813110,1481813110),
	('GdUmt3FvBgwMwF','view_admin','admin','View admin detail',1481813110,1481813110),
	('H9BrMSw8OU9Aog','edit_merchant_tags','merchant_detail','',1481813110,1481813110),
	('IU3IWXyWr4VtRC','view_merchant_balance_live','merchant_detail','',1481813110,1481813110),
	('J02Bu4qpPTw85x','create_beneficiary_file','merchant_detail','',1481813110,1481813110),
	('Jhp8fe2ewvXGPo','edit_payment_refund','merchant_detail','',1481813110,1481813110),
	('KhVjYtXmMKOw8Z','edit_verify_payments','merchant_detail','',1481813110,1481813110),
	('Mj0dxYDWW78ykD','create_reconciliate','merchant_detail','',1481813110,1481813110),
	('NOaat7a6WjcJbS','create_admin','admin','Create admin',1481813110,1481813110),
	('NRwNukLwLXL04S','assign_merchant_banks','merchant_detail','',1481813110,1481813110),
	('Nu5fc8Tt5baQRV','group_get_allowed_groups','group','Get allowed groups',1481813110,1481813110),
	('OC4vB90ZTv4Nex','edit_merchant_comments','merchant_detail','',1481813110,1481813110),
	('OrCsTdI0ip1lJf','delete_emi_plan','merchant_detail','',1481813110,1481813110),
	('PjTd6tZzpftq1V','view_merchant_stats','merchant_detail','',1481813110,1481813110),
	('Pl6LemRwlYHev8','edit_terminal','merchant_detail','',1481813110,1481813110),
	('QQvbA4EdDtGH2o','view_group','group','View group detail',1481813110,1481813110),
	('RBwGbLLOK2XOKP','assign_merchant_terminal','merchant_detail','',1481813110,1481813110),
	('RbqNqAWlj0KyQq','edit_activate_merchant','merchant_detail','',1481813110,1481813110),
	('Ryjz1o2GqzVwjQ','view_all_admin','admin','View all admins',1481813110,1481813110),
	('TkK6xAZfdWttDR','view_all_org','org','View all organizations',1481813110,1481813110),
	('UYtZFeCfJ2fBxs','view_role','role','View role detail',1481813110,1481813110),
	('WdF7SoOoCOwU8f','view_merchant_banks','merchant_detail','',1481813110,1481813110),
	('X6Trwt6Styougf','view_merchant_aggregations','merchant_detail','',1481813110,1481813110),
	('XFctnOkb35EslH','create_merchant_adjustments','merchant_detail','',1481813110,1481813110),
	('XJEXulcQ0Wrj70','edit_merchant_banks','merchant_detail','',1481813110,1481813110),
	('XxPYWucBrlsRY4','view_beneficiary_file','merchant_detail','',1481813110,1481813110),
	('YaDloYRP4xRNJK','view_merchant_company_info','merchant_detail','',1481813110,1481813110),
	('Z1LlFfCB5t2uLr','send_newsletter','merchant_detail','',1481813110,1481813110),
	('Ze4Ld5fL63W9jh','edit_admin','admin','Edit admin',1481813110,1481813110),
	('a5HEMi8oNpo6Ux','edit_merchant_release_funds','merchant_detail','',1481813110,1481813110),
	('a7faoS39CSOV1f','view_all_permission','permission','View all permissions',1481813110,1481813110),
	('aPSG6vmWob4UoU','schedule_fetch','merchant_detail','',1481813110,1481813110),
	('as8jnjTiMqvy5s','edit_merchant_enable_live','merchant_detail','',1481813110,1481813110),
	('b1FAsAsXt9lLQE','add_merchant_credits','merchant_detail','',1481813110,1481813110),
	('b8qNNAsbZvheKT','view_all_group','group','View all groups',1481813110,1481813110),
	('bu8T9Q0FFiwQig','create_settlements_reconcile','merchant_detail','',1481813110,1481813110),
	('bw8GSRnpkHMAZx','edit_merchant_international','merchant_detail','',1481813110,1481813110),
	('cD8vmHNnGMrpnO','edit_merchant_lock_activation','merchant_detail','',1481813110,1481813110),
	('cfucPfIdWzuznr','set_pricing_rules','merchant_detail','',1481813110,1481813110),
	('cphmhHEa5dxzoJ','edit_merchant_archive','merchant_detail','',1481813110,1481813110),
	('dp57vJk0xVrv1m','create_emi_plan','merchant_detail','',1481813110,1481813110),
	('e6av3z4oQlzJ0n','view_merchant_balance','merchant_detail','View merchant balance in merchant details',1481813110,1481813110),
	('elogTdVwL6lEbm','edit_role','role','Edit role',1481813110,1481813110),
	('en0R7zbeOJ1oQJ','view_payment_verify','merchant_detail','',1481813110,1481813110),
	('f9qxsiShEPSFFZ','view_merchant_pricing_rules','merchant_detail','',1481813110,1481813110),
	('fuBTDBkbL0k137','merchant_autofill_form','merchant_detail','',1481813110,1481813110),
	('g5QZ497lUOaOkM','create_merchant_unlock','merchant_detail','',1481813110,1481813110),
	('gHGSbMOSbI6kYd','view_all_entity','entity','View all entities data',1481813110,1481813110),
	('gIOJwwHjHo1C5p','view_all_merchant_aggregations','merchant_detail','',1481813110,1481813110),
	('gNJAGsQ0Nm5otY','edit_merchant_confirm','merchant_detail','',1481813110,1481813110),
	('gtScRjV542rdUF','edit_merchant_email','merchant_detail','',1481813110,1481813110),
	('h1aSX8WTsoJJ4z','create_netbanking_refund','merchant_detail','',1481813110,1481813110),
	('hBxn6EezcKvFDm','view_merchant_login','merchant_detail','',1481813110,1481813110),
	('hJqa5t9we3Qj4T','delete_role','role','Delete role',1481813110,1481813110),
	('hhQoyetlp9bgYG','schedule_assign','merchant_detail','',1481813110,1481813110),
	('kZQe7sWadbTUKs','edit_merchant_pricing','merchant_detail','',1481813110,1481813110),
	('lSQ3Svl9KhZGve','edit_org','org','Edit organization',1481813110,1481813110),
	('lWnsOhLryDI3Q8','view_as_entity','merchant_detail','',1481813110,1481813110),
	('lj4czMvytaXU1k','schedule_delete','merchant_detail','',1481813110,1481813110),
	('mO1pVVI6Ff2MQJ','schedule_update','merchant_detail','',1481813110,1481813110),
	('mYRlmFAEbsRV3G','view_merchant_balance_test','merchant_detail','',1481813110,1481813110),
	('n8kWCE8tjXS4jm','create_role','role','Create role',1481813110,1481813110),
	('nzUw0oEUE98aJm','delete_pricing_plan_rules','merchant_detail','',1481813110,1481813110),
	('oBlw7Ea9dDHBbC','view_actions','merchant_detail','',1481813110,1481813110),
	('oINVjseMZjStIW','edit_merchant_mark_referred','merchant_detail','',1481813110,1481813110),
	('oUYSWeEM1CnwOF','create_org','org','Create organization',1481813110,1481813110),
	('pPdG7JvuvWUaM3','delete_org','org','Delete organization',1481813110,1481813110),
	('q6ngxE70JtQ8Im','edit_merchant','merchant_detail','',1481813110,1481813110),
	('qDr7fautH7RaP4','schedule_fetch_multiple','merchant_detail','',1481813110,1481813110),
	('qRg8G5LuhvnfZD','create_group','group','Create group',1481813110,1481813110),
	('qZ4nO5miSybbOn','delete_terminal','merchant_detail','',1481813110,1481813110),
	('qjoROOj52k8Hjg','edit_merchant_disable_live','merchant_detail','',1481813110,1481813110),
	('sCZfLcTr1FwAh7','view_org','org','View organization detail',1481813110,1481813110),
	('sXd6yJl8byDcWO','view_pricing_list','merchant_detail','',1481813110,1481813110),
	('tI5lH38HOXojeb','view_activity','merchant_detail','',1481813110,1481813110),
	('tdf2zZQHHmXW0i','edit_payment_capture','merchant_detail','',1481813110,1481813110),
	('ukzNlL4SI5rlNh','edit_iin_rule','merchant_detail','',1481813110,1481813110),
	('umHwCj4ZlXnsnz','trigger_dummy_error','merchant_detail','',1481813110,1481813110),
	('urjghfTLfrsnAf','create_merchant_lock','merchant_detail','',1481813110,1481813110),
	('vBAdrU7MTaynIq','view_merchant','merchant','View a particular merchant details',1481813110,1481813110),
	('vIFekQr87SrmYe','add_merchant_adjustment','merchant_detail','',1481813110,1481813110),
	('w2NQJPrKZjh3TO','edit_authorized_failed_payment','merchant_detail','',1481813110,1481813110),
	('wJXRq72adZ8EfF','edit_group','group','Edit group',1481813110,1481813110),
	('wOHy8i28vFrtGq','edit_merchant_screenshot','merchant_detail','',1481813110,1481813110),
	('wYmKKKXThmtDuM','create_pricing_plan','merchant_detail','',1481813110,1481813110),
	('wt6H6a2Et4ZtPh','view_merchant_hdfc_excel','merchant_detail','',1481813110,1481813110),
	('x2VnNoJdDlCyVM','view_all_merchants','merchant','View all merchants in merchant lists',1481813110,1481813110),
	('xQNQRUKXYUv4gQ','add_settlement_reconciliation','merchant_detail','',1481813110,1481813110),
	('xqBWjeiqGHYUP2','view_merchant_tags','merchant_detail','',1481813110,1481813110),
	('yqwEDxO44iIctN','edit_authorized_refund_payment','merchant_detail','',1481813110,1481813110),
	('zYygr4Y3ED1ccI','edit_merchant_unarchive','merchant_detail','',1481813110,1481813110),
	('zd4kK241F0P0Gq','view_merchant_credits_log','merchant_detail','',1481813110,1481813110),
	('urjghfTLfrsnAf','create_gateway_downtime','gateway_downtime','',1481813110,1481813110),
	('arjghfTLgrsnBf','update_gateway_downtime','gateway_downtime','',1481813110,1481813110);


# PERMISSION MAP

INSERT INTO `permission_map` (`permission_id`, `entity_id`, `entity_type`)
VALUES
	('0MLsYmZHnM4uWm','100000razorpay','org'),
	('0MLsYmZHnM4uWm','6dLbNSpv5XbC5E','role'),
	('0s8CPPkTujecs3','100000razorpay','org'),
	('0s8CPPkTujecs3','6dLbNSpv5XbC5E','role'),
	('2HLQS76YC6dYp5','100000razorpay','org'),
	('2HLQS76YC6dYp5','6dLbNSpv5XbC5E','role'),
	('2HLQS76YC6dYp5','6dLbNSpv5XbC5F','role'),
	('2HLQS76YC6dYp5','6dLbNSpv5XbCOG','org'),
	('2Zhuwx46WLj4N5','100000razorpay','org'),
	('2Zhuwx46WLj4N5','6dLbNSpv5XbC5E','role'),
	('2Zhuwx46WLj4N5','6dLbNSpv5XbC5F','role'),
	('2Zhuwx46WLj4N5','6dLbNSpv5XbCOG','org'),
	('5K3Il2uu2WxM23','100000razorpay','org'),
	('5K3Il2uu2WxM23','6dLbNSpv5XbC5E','role'),
	('6lMLpbU6qpPatq','100000razorpay','org'),
	('6lMLpbU6qpPatq','6dLbNSpv5XbC5E','role'),
	('6sn4wiwDIgg8kV','100000razorpay','org'),
	('6sn4wiwDIgg8kV','6dLbNSpv5XbC5E','role'),
	('6sn4wiwDIgg8kV','6dLbNSpv5XbC5F','role'),
	('6sn4wiwDIgg8kV','6dLbNSpv5XbCOG','org'),
	('78mVF43Tt6aQfA','100000razorpay','org'),
	('78mVF43Tt6aQfA','6dLbNSpv5XbC5E','role'),
	('79hWzNrfXeiUwn','100000razorpay','org'),
	('79hWzNrfXeiUwn','6dLbNSpv5XbC5E','role'),
	('79hWzNrfXeiUwn','6dLbNSpv5XbC5F','role'),
	('79hWzNrfXeiUwn','6dLbNSpv5XbCOG','org'),
	('83UgcC9ZytPGMF','100000razorpay','org'),
	('83UgcC9ZytPGMF','6dLbNSpv5XbC5E','role'),
	('9LSFLoW9tSEGiL','100000razorpay','org'),
	('9LSFLoW9tSEGiL','6dLbNSpv5XbC5E','role'),
	('9nTlqBede8jajD','100000razorpay','org'),
	('9nTlqBede8jajD','6dLbNSpv5XbC5E','role'),
	('A59EXOzWMUijca','100000razorpay','org'),
	('A59EXOzWMUijca','6dLbNSpv5XbC5E','role'),
	('AL9E0nTYvHBvAQ','100000razorpay','org'),
	('AL9E0nTYvHBvAQ','6dLbNSpv5XbC5E','role'),
	('AL9E0nTYvHBvAQ','6dLbNSpv5XbC5F','role'),
	('AL9E0nTYvHBvAQ','6dLbNSpv5XbCOG','org'),
	('ANqlHHe72arEya','100000razorpay','org'),
	('ANqlHHe72arEya','6dLbNSpv5XbC5E','role'),
	('CyVJRRDNssUlHM','100000razorpay','org'),
	('CyVJRRDNssUlHM','6dLbNSpv5XbC5E','role'),
	('CyVJRRDNssUlHM','6dLbNSpv5XbC5F','role'),
	('CyVJRRDNssUlHM','6dLbNSpv5XbCOG','org'),
	('DD07gwj8ijsGJP','100000razorpay','org'),
	('DD07gwj8ijsGJP','6dLbNSpv5XbC5E','role'),
	('DD07gwj8ijsGJP','6dLbNSpv5XbC5F','role'),
	('DD07gwj8ijsGJP','6dLbNSpv5XbCOG','org'),
	('DijwaBhTNB6w8c','100000razorpay','org'),
	('DijwaBhTNB6w8c','6dLbNSpv5XbC5E','role'),
	('E74qu36BAV5ogx','100000razorpay','org'),
	('E74qu36BAV5ogx','6dLbNSpv5XbC5E','role'),
	('E9ETnrBjjrtxCZ','100000razorpay','org'),
	('E9ETnrBjjrtxCZ','6dLbNSpv5XbC5E','role'),
	('E9ETnrBjjrtxCZ','6dLbNSpv5XbC5F','role'),
	('E9ETnrBjjrtxCZ','6dLbNSpv5XbCOG','org'),
	('EUfHqs2IarCr8t','100000razorpay','org'),
	('EUfHqs2IarCr8t','6dLbNSpv5XbC5E','role'),
	('El8JYjvN5FefDF','100000razorpay','org'),
	('El8JYjvN5FefDF','6dLbNSpv5XbC5E','role'),
	('El8JYjvN5FefDF','6dLbNSpv5XbC5F','role'),
	('El8JYjvN5FefDF','6dLbNSpv5XbCOG','org'),
	('FThWSrodJ3rUgo','100000razorpay','org'),
	('FThWSrodJ3rUgo','6dLbNSpv5XbC5E','role'),
	('FnSlf2E5qLeLP1','100000razorpay','org'),
	('FnSlf2E5qLeLP1','6dLbNSpv5XbC5E','role'),
	('GdUmt3FvBgwMwF','100000razorpay','org'),
	('GdUmt3FvBgwMwF','6dLbNSpv5XbC5E','role'),
	('GdUmt3FvBgwMwF','6dLbNSpv5XbC5F','role'),
	('GdUmt3FvBgwMwF','6dLbNSpv5XbCOG','org'),
	('H9BrMSw8OU9Aog','100000razorpay','org'),
	('H9BrMSw8OU9Aog','6dLbNSpv5XbC5E','role'),
	('IU3IWXyWr4VtRC','100000razorpay','org'),
	('IU3IWXyWr4VtRC','6dLbNSpv5XbC5E','role'),
	('IU3IWXyWr4VtRC','6dLbNSpv5XbC5F','role'),
	('IU3IWXyWr4VtRC','6dLbNSpv5XbCOG','org'),
	('J02Bu4qpPTw85x','100000razorpay','org'),
	('J02Bu4qpPTw85x','6dLbNSpv5XbC5E','role'),
	('Jhp8fe2ewvXGPo','100000razorpay','org'),
	('Jhp8fe2ewvXGPo','6dLbNSpv5XbC5E','role'),
	('KhVjYtXmMKOw8Z','100000razorpay','org'),
	('KhVjYtXmMKOw8Z','6dLbNSpv5XbC5E','role'),
	('Mj0dxYDWW78ykD','100000razorpay','org'),
	('Mj0dxYDWW78ykD','6dLbNSpv5XbC5E','role'),
	('NOaat7a6WjcJbS','100000razorpay','org'),
	('NOaat7a6WjcJbS','6dLbNSpv5XbC5E','role'),
	('NOaat7a6WjcJbS','6dLbNSpv5XbC5F','role'),
	('NOaat7a6WjcJbS','6dLbNSpv5XbCOG','org'),
	('NRwNukLwLXL04S','100000razorpay','org'),
	('NRwNukLwLXL04S','6dLbNSpv5XbC5E','role'),
	('Nu5fc8Tt5baQRV','100000razorpay','org'),
	('Nu5fc8Tt5baQRV','6dLbNSpv5XbC5E','role'),
	('Nu5fc8Tt5baQRV','6dLbNSpv5XbC5F','role'),
	('Nu5fc8Tt5baQRV','6dLbNSpv5XbCOG','org'),
	('OC4vB90ZTv4Nex','100000razorpay','org'),
	('OC4vB90ZTv4Nex','6dLbNSpv5XbC5E','role'),
	('OrCsTdI0ip1lJf','100000razorpay','org'),
	('OrCsTdI0ip1lJf','6dLbNSpv5XbC5E','role'),
	('PjTd6tZzpftq1V','100000razorpay','org'),
	('PjTd6tZzpftq1V','6dLbNSpv5XbC5E','role'),
	('Pl6LemRwlYHev8','100000razorpay','org'),
	('Pl6LemRwlYHev8','6dLbNSpv5XbC5E','role'),
	('QQvbA4EdDtGH2o','100000razorpay','org'),
	('QQvbA4EdDtGH2o','6dLbNSpv5XbC5E','role'),
	('QQvbA4EdDtGH2o','6dLbNSpv5XbC5F','role'),
	('QQvbA4EdDtGH2o','6dLbNSpv5XbCOG','org'),
	('RBwGbLLOK2XOKP','100000razorpay','org'),
	('RBwGbLLOK2XOKP','6dLbNSpv5XbC5E','role'),
	('RbqNqAWlj0KyQq','100000razorpay','org'),
	('RbqNqAWlj0KyQq','6dLbNSpv5XbC5E','role'),
	('RbqNqAWlj0KyQq','6dLbNSpv5XbC5F','role'),
	('RbqNqAWlj0KyQq','6dLbNSpv5XbCOG','org'),
	('Ryjz1o2GqzVwjQ','100000razorpay','org'),
	('Ryjz1o2GqzVwjQ','6dLbNSpv5XbC5E','role'),
	('Ryjz1o2GqzVwjQ','6dLbNSpv5XbC5F','role'),
	('Ryjz1o2GqzVwjQ','6dLbNSpv5XbCOG','org'),
	('TkK6xAZfdWttDR','100000razorpay','org'),
	('TkK6xAZfdWttDR','6dLbNSpv5XbC5E','role'),
	('UYtZFeCfJ2fBxs','100000razorpay','org'),
	('UYtZFeCfJ2fBxs','6dLbNSpv5XbC5E','role'),
	('UYtZFeCfJ2fBxs','6dLbNSpv5XbC5F','role'),
	('UYtZFeCfJ2fBxs','6dLbNSpv5XbCOG','org'),
	('WdF7SoOoCOwU8f','100000razorpay','org'),
	('WdF7SoOoCOwU8f','6dLbNSpv5XbC5E','role'),
	('X6Trwt6Styougf','100000razorpay','org'),
	('X6Trwt6Styougf','6dLbNSpv5XbC5E','role'),
	('XFctnOkb35EslH','100000razorpay','org'),
	('XFctnOkb35EslH','6dLbNSpv5XbC5E','role'),
	('XJEXulcQ0Wrj70','100000razorpay','org'),
	('XJEXulcQ0Wrj70','6dLbNSpv5XbC5E','role'),
	('XxPYWucBrlsRY4','100000razorpay','org'),
	('XxPYWucBrlsRY4','6dLbNSpv5XbC5E','role'),
	('YaDloYRP4xRNJK','100000razorpay','org'),
	('YaDloYRP4xRNJK','6dLbNSpv5XbC5E','role'),
	('YaDloYRP4xRNJK','6dLbNSpv5XbC5F','role'),
	('YaDloYRP4xRNJK','6dLbNSpv5XbCOG','org'),
	('Z1LlFfCB5t2uLr','100000razorpay','org'),
	('Z1LlFfCB5t2uLr','6dLbNSpv5XbC5E','role'),
	('Ze4Ld5fL63W9jh','100000razorpay','org'),
	('Ze4Ld5fL63W9jh','6dLbNSpv5XbC5E','role'),
	('Ze4Ld5fL63W9jh','6dLbNSpv5XbC5F','role'),
	('Ze4Ld5fL63W9jh','6dLbNSpv5XbCOG','org'),
	('a5HEMi8oNpo6Ux','100000razorpay','org'),
	('a5HEMi8oNpo6Ux','6dLbNSpv5XbC5E','role'),
	('a5HEMi8oNpo6Ux','6dLbNSpv5XbC5F','role'),
	('a5HEMi8oNpo6Ux','6dLbNSpv5XbCOG','org'),
	('a7faoS39CSOV1f','100000razorpay','org'),
	('a7faoS39CSOV1f','6dLbNSpv5XbC5E','role'),
	('a7faoS39CSOV1f','6dLbNSpv5XbC5F','role'),
	('a7faoS39CSOV1f','6dLbNSpv5XbCOG','org'),
	('aPSG6vmWob4UoU','100000razorpay','org'),
	('aPSG6vmWob4UoU','6dLbNSpv5XbC5E','role'),
	('as8jnjTiMqvy5s','100000razorpay','org'),
	('as8jnjTiMqvy5s','6dLbNSpv5XbC5E','role'),
	('as8jnjTiMqvy5s','6dLbNSpv5XbC5F','role'),
	('as8jnjTiMqvy5s','6dLbNSpv5XbCOG','org'),
	('b1FAsAsXt9lLQE','100000razorpay','org'),
	('b1FAsAsXt9lLQE','6dLbNSpv5XbC5E','role'),
	('b8qNNAsbZvheKT','100000razorpay','org'),
	('b8qNNAsbZvheKT','6dLbNSpv5XbC5E','role'),
	('b8qNNAsbZvheKT','6dLbNSpv5XbC5F','role'),
	('b8qNNAsbZvheKT','6dLbNSpv5XbCOG','org'),
	('bu8T9Q0FFiwQig','100000razorpay','org'),
	('bu8T9Q0FFiwQig','6dLbNSpv5XbC5E','role'),
	('bw8GSRnpkHMAZx','100000razorpay','org'),
	('bw8GSRnpkHMAZx','6dLbNSpv5XbC5E','role'),
	('cD8vmHNnGMrpnO','100000razorpay','org'),
	('cD8vmHNnGMrpnO','6dLbNSpv5XbC5E','role'),
	('cD8vmHNnGMrpnO','6dLbNSpv5XbC5F','role'),
	('cD8vmHNnGMrpnO','6dLbNSpv5XbCOG','org'),
	('cfucPfIdWzuznr','100000razorpay','org'),
	('cfucPfIdWzuznr','6dLbNSpv5XbC5E','role'),
	('cfucPfIdWzuznr','6dLbNSpv5XbC5F','role'),
	('cfucPfIdWzuznr','6dLbNSpv5XbCOG','org'),
	('cphmhHEa5dxzoJ','100000razorpay','org'),
	('cphmhHEa5dxzoJ','6dLbNSpv5XbC5E','role'),
	('cphmhHEa5dxzoJ','6dLbNSpv5XbC5F','role'),
	('cphmhHEa5dxzoJ','6dLbNSpv5XbCOG','org'),
	('dp57vJk0xVrv1m','100000razorpay','org'),
	('dp57vJk0xVrv1m','6dLbNSpv5XbC5E','role'),
	('e6av3z4oQlzJ0n','100000razorpay','org'),
	('e6av3z4oQlzJ0n','6dLbNSpv5XbC5E','role'),
	('e6av3z4oQlzJ0n','6dLbNSpv5XbC5F','role'),
	('e6av3z4oQlzJ0n','6dLbNSpv5XbCOG','org'),
	('elogTdVwL6lEbm','100000razorpay','org'),
	('elogTdVwL6lEbm','6dLbNSpv5XbC5E','role'),
	('elogTdVwL6lEbm','6dLbNSpv5XbC5F','role'),
	('elogTdVwL6lEbm','6dLbNSpv5XbCOG','org'),
	('en0R7zbeOJ1oQJ','100000razorpay','org'),
	('en0R7zbeOJ1oQJ','6dLbNSpv5XbC5E','role'),
	('f9qxsiShEPSFFZ','100000razorpay','org'),
	('f9qxsiShEPSFFZ','6dLbNSpv5XbC5E','role'),
	('fuBTDBkbL0k137','100000razorpay','org'),
	('fuBTDBkbL0k137','6dLbNSpv5XbC5E','role'),
	('g5QZ497lUOaOkM','100000razorpay','org'),
	('g5QZ497lUOaOkM','6dLbNSpv5XbC5E','role'),
	('g5QZ497lUOaOkM','6dLbNSpv5XbC5F','role'),
	('g5QZ497lUOaOkM','6dLbNSpv5XbCOG','org'),
	('gHGSbMOSbI6kYd','100000razorpay','org'),
	('gHGSbMOSbI6kYd','6dLbNSpv5XbC5E','role'),
	('gIOJwwHjHo1C5p','100000razorpay','org'),
	('gIOJwwHjHo1C5p','6dLbNSpv5XbC5E','role'),
	('gNJAGsQ0Nm5otY','100000razorpay','org'),
	('gNJAGsQ0Nm5otY','6dLbNSpv5XbC5E','role'),
	('gNJAGsQ0Nm5otY','6dLbNSpv5XbC5F','role'),
	('gNJAGsQ0Nm5otY','6dLbNSpv5XbCOG','org'),
	('gtScRjV542rdUF','100000razorpay','org'),
	('gtScRjV542rdUF','6dLbNSpv5XbC5E','role'),
	('gtScRjV542rdUF','6dLbNSpv5XbC5F','role'),
	('gtScRjV542rdUF','6dLbNSpv5XbCOG','org'),
	('h1aSX8WTsoJJ4z','100000razorpay','org'),
	('h1aSX8WTsoJJ4z','6dLbNSpv5XbC5E','role'),
	('hBxn6EezcKvFDm','100000razorpay','org'),
	('hBxn6EezcKvFDm','6dLbNSpv5XbC5E','role'),
	('hJqa5t9we3Qj4T','100000razorpay','org'),
	('hJqa5t9we3Qj4T','6dLbNSpv5XbC5E','role'),
	('hJqa5t9we3Qj4T','6dLbNSpv5XbC5F','role'),
	('hJqa5t9we3Qj4T','6dLbNSpv5XbCOG','org'),
	('hhQoyetlp9bgYG','100000razorpay','org'),
	('hhQoyetlp9bgYG','6dLbNSpv5XbC5E','role'),
	('kZQe7sWadbTUKs','100000razorpay','org'),
	('kZQe7sWadbTUKs','6dLbNSpv5XbC5E','role'),
	('lSQ3Svl9KhZGve','100000razorpay','org'),
	('lSQ3Svl9KhZGve','6dLbNSpv5XbC5E','role'),
	('lWnsOhLryDI3Q8','100000razorpay','org'),
	('lWnsOhLryDI3Q8','6dLbNSpv5XbC5E','role'),
	('lj4czMvytaXU1k','100000razorpay','org'),
	('lj4czMvytaXU1k','6dLbNSpv5XbC5E','role'),
	('mO1pVVI6Ff2MQJ','100000razorpay','org'),
	('mO1pVVI6Ff2MQJ','6dLbNSpv5XbC5E','role'),
	('mYRlmFAEbsRV3G','100000razorpay','org'),
	('mYRlmFAEbsRV3G','6dLbNSpv5XbC5E','role'),
	('mYRlmFAEbsRV3G','6dLbNSpv5XbC5F','role'),
	('mYRlmFAEbsRV3G','6dLbNSpv5XbCOG','org'),
	('n8kWCE8tjXS4jm','100000razorpay','org'),
	('n8kWCE8tjXS4jm','6dLbNSpv5XbC5E','role'),
	('n8kWCE8tjXS4jm','6dLbNSpv5XbC5F','role'),
	('n8kWCE8tjXS4jm','6dLbNSpv5XbCOG','org'),
	('nzUw0oEUE98aJm','100000razorpay','org'),
	('nzUw0oEUE98aJm','6dLbNSpv5XbC5E','role'),
	('nzUw0oEUE98aJm','6dLbNSpv5XbC5F','role'),
	('nzUw0oEUE98aJm','6dLbNSpv5XbCOG','org'),
	('oBlw7Ea9dDHBbC','100000razorpay','org'),
	('oBlw7Ea9dDHBbC','6dLbNSpv5XbC5E','role'),
	('oINVjseMZjStIW','100000razorpay','org'),
	('oINVjseMZjStIW','6dLbNSpv5XbC5E','role'),
	('oUYSWeEM1CnwOF','100000razorpay','org'),
	('oUYSWeEM1CnwOF','6dLbNSpv5XbC5E','role'),
	('pPdG7JvuvWUaM3','100000razorpay','org'),
	('pPdG7JvuvWUaM3','6dLbNSpv5XbC5E','role'),
	('q6ngxE70JtQ8Im','100000razorpay','org'),
	('q6ngxE70JtQ8Im','6dLbNSpv5XbC5E','role'),
	('q6ngxE70JtQ8Im','6dLbNSpv5XbC5F','role'),
	('q6ngxE70JtQ8Im','6dLbNSpv5XbCOG','org'),
	('qDr7fautH7RaP4','100000razorpay','org'),
	('qDr7fautH7RaP4','6dLbNSpv5XbC5E','role'),
	('qRg8G5LuhvnfZD','100000razorpay','org'),
	('qRg8G5LuhvnfZD','6dLbNSpv5XbC5E','role'),
	('qRg8G5LuhvnfZD','6dLbNSpv5XbC5F','role'),
	('qRg8G5LuhvnfZD','6dLbNSpv5XbCOG','org'),
	('qZ4nO5miSybbOn','100000razorpay','org'),
	('qZ4nO5miSybbOn','6dLbNSpv5XbC5E','role'),
	('qjoROOj52k8Hjg','100000razorpay','org'),
	('qjoROOj52k8Hjg','6dLbNSpv5XbC5E','role'),
	('qjoROOj52k8Hjg','6dLbNSpv5XbC5F','role'),
	('qjoROOj52k8Hjg','6dLbNSpv5XbCOG','org'),
	('sCZfLcTr1FwAh7','100000razorpay','org'),
	('sCZfLcTr1FwAh7','6dLbNSpv5XbC5E','role'),
	('sXd6yJl8byDcWO','100000razorpay','org'),
	('sXd6yJl8byDcWO','6dLbNSpv5XbC5E','role'),
	('tI5lH38HOXojeb','100000razorpay','org'),
	('tI5lH38HOXojeb','6dLbNSpv5XbC5E','role'),
	('tdf2zZQHHmXW0i','100000razorpay','org'),
	('tdf2zZQHHmXW0i','6dLbNSpv5XbC5E','role'),
	('ukzNlL4SI5rlNh','100000razorpay','org'),
	('ukzNlL4SI5rlNh','6dLbNSpv5XbC5E','role'),
	('umHwCj4ZlXnsnz','100000razorpay','org'),
	('umHwCj4ZlXnsnz','6dLbNSpv5XbC5E','role'),
	('urjghfTLfrsnAf','100000razorpay','org'),
	('urjghfTLfrsnAf','6dLbNSpv5XbC5E','role'),
	('urjghfTLfrsnAf','6dLbNSpv5XbC5F','role'),
	('urjghfTLfrsnAf','6dLbNSpv5XbCOG','org'),
	('vBAdrU7MTaynIq','100000razorpay','org'),
	('vBAdrU7MTaynIq','6dLbNSpv5XbC5E','role'),
	('vBAdrU7MTaynIq','6dLbNSpv5XbC5F','role'),
	('vBAdrU7MTaynIq','6dLbNSpv5XbCOG','org'),
	('vIFekQr87SrmYe','100000razorpay','org'),
	('vIFekQr87SrmYe','6dLbNSpv5XbC5E','role'),
	('w2NQJPrKZjh3TO','100000razorpay','org'),
	('w2NQJPrKZjh3TO','6dLbNSpv5XbC5E','role'),
	('wJXRq72adZ8EfF','100000razorpay','org'),
	('wJXRq72adZ8EfF','6dLbNSpv5XbC5E','role'),
	('wJXRq72adZ8EfF','6dLbNSpv5XbC5F','role'),
	('wJXRq72adZ8EfF','6dLbNSpv5XbCOG','org'),
	('wOHy8i28vFrtGq','100000razorpay','org'),
	('wOHy8i28vFrtGq','6dLbNSpv5XbC5E','role'),
	('wOHy8i28vFrtGq','6dLbNSpv5XbC5F','role'),
	('wOHy8i28vFrtGq','6dLbNSpv5XbCOG','org'),
	('wYmKKKXThmtDuM','100000razorpay','org'),
	('wYmKKKXThmtDuM','6dLbNSpv5XbC5E','role'),
	('wYmKKKXThmtDuM','6dLbNSpv5XbC5F','role'),
	('wYmKKKXThmtDuM','6dLbNSpv5XbCOG','org'),
	('wt6H6a2Et4ZtPh','100000razorpay','org'),
	('wt6H6a2Et4ZtPh','6dLbNSpv5XbC5E','role'),
	('x2VnNoJdDlCyVM','100000razorpay','org'),
	('x2VnNoJdDlCyVM','6dLbNSpv5XbC5E','role'),
	('x2VnNoJdDlCyVM','6dLbNSpv5XbC5F','role'),
	('x2VnNoJdDlCyVM','6dLbNSpv5XbCOG','org'),
	('xQNQRUKXYUv4gQ','100000razorpay','org'),
	('xQNQRUKXYUv4gQ','6dLbNSpv5XbC5E','role'),
	('xqBWjeiqGHYUP2','100000razorpay','org'),
	('xqBWjeiqGHYUP2','6dLbNSpv5XbC5E','role'),
	('yqwEDxO44iIctN','100000razorpay','org'),
	('yqwEDxO44iIctN','6dLbNSpv5XbC5E','role'),
	('zYygr4Y3ED1ccI','100000razorpay','org'),
	('zYygr4Y3ED1ccI','6dLbNSpv5XbC5E','role'),
	('zYygr4Y3ED1ccI','6dLbNSpv5XbC5F','role'),
	('zYygr4Y3ED1ccI','6dLbNSpv5XbCOG','org'),
	('zd4kK241F0P0Gq','100000razorpay','org'),
	('zd4kK241F0P0Gq','6dLbNSpv5XbC5E','role'),
	('urjghfTLfrsnAf','100000razorpay','org'),
	('urjghfTLfrsnAf','6dLbNSpv5XbC5E','role'),
  ('arjghfTLgrsnBf','100000razorpay','org');
	('arjghfTLgrsnBf','6dLbNSpv5XbC5E','role'),

# ALLOW ALL MERCHANTS FLAG

ALTER TABLE admins ADD COLUMN allow_all_merchants BOOLEAN DEFAULT 0;

# Update all admins to have allow_all_merchants to be true so that they can see everything

UPDATE admins set allow_all_merchants = 1 WHERE org_id = '100000razorpay';

# Update all org_id for all merchants

UPDATE merchants SET org_id = '100000razorpay';

# Custom Code

ALTER TABLE orgs
ADD COLUMN custom_code VARCHAR(250)
UNIQUE NULL
AFTER invoice_logo_url;