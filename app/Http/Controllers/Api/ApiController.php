<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

abstract class ApiController extends Controller
{
    protected $currentUser;
    protected $guard = 'api';

    public function __construct()
    {
        $this->currentUser = Auth::guard($this->guard)->user();
    }

    /**
     * Function build true json
     *
     * @param object $data
     * @param array $extra
     * @return \Illuminate\Http\JsonResponse
     */
    public function trueJson($data = null, $extra = null)
    {
        $ex = ['error' => false];

        $status = API_RESPONSE_CODE_OK;

        if (is_array($extra)) {
            $status = in_array('status', $extra) ? $extra['status'] : $status;
            $ex = array_merge($ex, $extra);
        }

        if (is_string($extra) || is_null($extra)) {
            $ex = array_merge($ex, ['messages' => is_null($extra) ? [] : [$extra]]);
        }

        return $this->buildJson($status, $data, $ex);
    }

    /**
     * Function make false json
     *
     * @param string $errcode
     * @param string $errmsg
     * @param array $extra
     * @return \Illuminate\Http\JsonResponse
     */
    public function falseJson($errcode, $errmsg = null, $extra = [])
    {
        if (is_null($errmsg)) {
            $errmsg = 'rescode_' . $errcode;
        }

        $error = ['error' => true, 'messages' => [$errmsg]];
        $status = $errcode;

        if (!empty($extra)) {
            $error = array_merge($error, $extra);
        }

        return $this->buildJson($status, null, $error);
    }

    /**
     * Function make json response
     *
     * @param $status
     * @param object $result
     * @param array $extra
     * @return \Illuminate\Http\JsonResponse
     */
    private function buildJson($status, $result = null, $extra = null)
    {
        $arr['status'] = $status;

        if (isset($extra)) {
            $arr = array_merge($arr, $extra);
        }

        if (isset($result)) {
            $arr['data'] = $result;
        }

        return response()->json($arr, $status);
    }
}
