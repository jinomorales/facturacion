<?php

return [
    'app_url_base' => env('APP_URL_BASE'),
    'items_per_page' => env('ITEMS_PER_PAGE', 20),
    'items_per_page_simple_d_table' => env('ITEMS_PER_PAGE_SIMPLE_D_TABLE', 5),
    'items_per_page_simple_d_table_params' => env('ITEMS_PER_PAGE_SIMPLE_D_TABLE_PARAMS', 10),
    'password_change' => env('PASSWORD_CHANGE', false),
    'prefix_database' => env('PREFIX_DATABASE', 'tenancy'),
    'signature_note' => env('SIGNATURE_NOTE', 'FACTURALO'),
    'signature_uri' => env('SIGNATURE_URI', '#FACTURALO'),
    'force_https' => env('FORCE_HTTPS', false),
    'document_type_03_filter' => env('DOCUMENT_TYPE_03_FILTER', true),
    'is_client' => env('IS_CLIENT', false),
    'token_server' => env('TOKEN_SERVER'),
    'url_server' => env('URL_SERVER'),
    'recreate_document' => env('RECREATE_DOCUMENT', false),
    'pdf_template' => env('PDF_TEMPLATE', 'default'),
    'pdf_template_footer' => env('PDF_TEMPLATE_FOOTER', false),
    'pdf_name_regular' => env('PDF_NAME_REGULAR', false),
    'pdf_name_bold' => env('PDF_NAME_BOLD', false),
    'change_to_registered_status' => env('CHANGE_TO_REGISTERED_STATUS', false),
    'customer_multi_address' => env('CUSTOMER_MULTI_ADDRESS', false),
    'name_certificate_cron' => env('NAME_CERTIFICATE_CRON', 'none'),
    'import_documents' => env('IMPORT_DOCUMENTS', false),
    'import_documents_second_format' => env('IMPORT_DOCUMENTS_SECOND_FORMAT', false),
    'enabled_template_ticket_80' => env('ENABLED_TEMPLATE_TICKET_80', false),
    'enabled_template_ticket_70' => env('ENABLED_TEMPLATE_TICKET_70', false),
    'enabled_discount_global' => env('ENABLED_DISCOUNT_GLOBAL', false),
    'delete_document_type_03' => env('DELETE_DOCUMENT_TYPE_03', false),
    'select_first_document_type_03' => env('SELECT_FIRST_DOCUMENT_TYPE_03', false),
    'admin_delete_client' => env('ADMIN_DELETE_CLIENT', false),
    'soap_stream_context_ssl' => env('SOAP_STREAM_CONTEXT_SSL', false),
    'apiperudev_validator_cpe' => env('APIPERUDEV_VALIDATOR_CPE', true),
    'validator_cpe' => env('VALIDATOR_CPE', false),
    'auto_print' => env('AUTO_PRINT', false),
    'show_summary_status_type' => env('SHOW_SUMMARY_STATUS_TYPE', false),

    'document_import_excel' => env('DOCUMENT_IMPORT_EXCEL', false),
    'template_document_mail' => env('TEMPLATE_DOCUMENT_MAIL', 'default'),
    'delete_relation_note_to_invoice' => env('DELETE_RELATION_NOTE_TO_INVOICE', false),

    'igv_31556_start' => env('IGV_31556_START', '2022-09-01'),
    'igv_31556_end' => env('IGV_31556_END', '2024-12-31'),
    'igv_31556_percentage' => env('IGV_31556_PERCENTAGE', 0.10),

    'save_qrcode' => env('SAVE_QRCODE', false),

    'socket_server' => env('SOCKET_SERVER', 'http://localhost:8070'),
    'internal_dispatch' => env('INTERNAL_DISPATCH', false),

    'ubigeo_default_invoice_import' => env('UBIGEO_DEFAULT_INVOICE_IMPORT', '150101'),
];
