<div class="easyui-panel" fit="false" border="false" iconCls="fa fa-edit">
    <form method="post">
        <dl>
            <dd>
                <input class="easyui-textbox" name="name" label="姓名" labelWidth="48" required="true" data-options="{validType: {length: [2, 24]}}"
                    style="width:100%">
            </dd>
            <dd>
                <input class="easyui-textbox" name="email" type="email" label="邮箱" labelWidth="48" required="true" validateOnCreate="false"
                    data-options="{validType: {email: true, remote: ['{{ module_url('wangdong/easyui/exist', ['type' => 'email','reverse' => true, 'except' => $data->email]) }}', 'email']}}"
                    style="width:100%">
            </dd>
            <dd>
                <input class="easyui-passwordbox" name="password" label="密码" labelWidth="48" data-options="{validType: {length: [6, 32]}}"
                    style="width:100%" prompt="留空时不修改密码">
            </dd>
        </dl>
    </form>
</div>

<style type="text/css">
    :module dl {
        margin: 24px 0;
    }

    :module dl dd {
        margin: 16px;
        max-width: 360px;
    }
</style>

<script type="text/javascript">
    $(':module').options({
        form: $('form', ':module'),
        data: {!! $data->toJson() !!},
        // 初始化
        init: function () {
            this.form.form('load', this.data);
        }
    }).init();

</script>
