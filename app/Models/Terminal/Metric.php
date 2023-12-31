<?php


namespace RZP\Models\Terminal;


final class Metric
{
    const TERMINAL_FETCH_BY_ID_COMPARISON_SUCCESS            =   'TERMINAL_FETCH_BY_ID_COMPARISON_SUCCESS';
    const TERMINAL_FETCH_BY_ID_COMPARISON_FAILURE            =   'TERMINAL_FETCH_BY_ID_COMPARISON_FAILURE';
    const TERMINAL_FETCH_FAILURE                             =   'TERMINAL_FETCH_FAILURE';
    const TERMINAL_FETCH_BY_MERCHANT_ID_COUNT_MISMATCH       =   'TERMINAL_FETCH_BY_MERCHANT_ID_COUNT_MISMATCH';
    const TERMINAL_FETCH_BY_MERCHANT_ID_TERMINAL_ID_MISMATCH =   'TERMINAL_FETCH_BY_MERCHANT_ID_TERMINAL_ID_MISMATCH';
    const TERMINAL_API_SELECTION_MISS                        =   'TERMINAL_API_SELECTION_MISS';
    const TERMINAL_PROXY_CALL_ERROR                          =   'TERMINAL_PROXY_CALL_ERROR';
    const TERMINAL_PROXY_CALL_RETRY_ERROR                    =   'TERMINAL_PROXY_CALL_RETRY_ERROR';
    const TERMINAL_PROXY_CALL_RETRY                          =   'TERMINAL_PROXY_CALL_RETRY';
    const TERMINAL_REPO_READ                                 =   'TERMINAL_REPO_READ';
    const TERMINAL_REPO_PROXY_V1                             =   'TERMINAL_REPO_PROXY_V1';
    const TERMINAL_CREDENTIAL_FETCH_FAILURE                  =   'TERMINAL_CREDENTIAL_FETCH_FAILURE';
}
