<?php

namespace Neo163\Testpackage\Controllers\Test;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Neo163\Testpackage\Controllers\BaseController;
use Neo163\Testpackage\PromptCode\SystemCode;

class HelloWorldController extends BaseController
{
    /**
     * @description: 文字测试
     * @author: Neo
     * @param {Request} $request
     * @return {*}
     */
    public function hello()
    {
        return 'hello text';
    }

    /**
     * @description: json格式测试
     * @author: Neo
     * @param {Request} $request
     * @return {*}
     */
    public function test(Request $request)
    {
        // 验证参数
        $input = $request->only('id', 'title');
        $validationCondition = [
            'id' => 'nullable|string',
            'title' => 'nullable|string',
        ];
        $validator = Validator::make($input, $validationCondition);
        if ($validator->fails()) {
            $error['message'] = $validator->errors()->first();
            return self::output(SystemCode::CODE_PARAMETER_ERROR, SystemCode::STATUS_ERROR, $error['message'], []);
        }

        return self::output(SystemCode::CODE_SUCCESS, SystemCode::STATUS_SUCCESS, '获取成功', $input);
    }
}
