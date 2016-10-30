    <!DOCTYPE html>
    <html>
  <head>
        <meta charset="UTF-8">
        <title>Basic Pagination - jQuery EasyUI Demo</title>
        <link rel="stylesheet" type="text/css" href="./easyui/themes/default/easyui.css">
        <link rel="stylesheet" type="text/css" href="./easyui/themes/icon.css">
        <link rel="stylesheet" type="text/css" href="./easyui/demo/demo.css">
        <script type="text/javascript" src="./easyui/jquery.min.js"></script>
        <script type="text/javascript" src="./easyui/jquery.easyui.min.js"></script>
        <script type="text/javascript" src="./js/table.js"></script>
    </head>
    <body>
     
        <div style="margin:0px 0;"></div>
        
        
        <table id="dg" class="easyui-datagrid" title="Row Editing in DataGrid" style="width:1200px;height:auto"
                data-options="
                    iconCls: 'icon-edit',
                    singleSelect: true,
                    toolbar: '#tb',
                    url: './easyui/demo/datagrid/datagrid_data1.json',
                    method: 'get',
                    onClickCell: onClickCell,
                    onEndEdit: onEndEdit
                ">
            <thead>
                <tr>
                    <th data-options="field:'itemid',width:120">Item ID</th>
                    <th data-options="field:'productid',width:120,
                            formatter:function(value,row){
                                return row.productname;
                            },
                            editor:{
                                type:'combobox',
                                options:{
                                    valueField:'productid',
                                    textField:'productname',
                                    method:'get',
                                    url:'./easyui/demo/datagrid/products.json',
                                    required:true
                                }
                            }">Product</th>
                    <th data-options="field:'listprice',width:120,align:'right',editor:{type:'numberbox',options:{precision:1}}">List Price</th>
                    <th data-options="field:'unitcost',width:120,align:'right',editor:'numberbox'">Unit Cost</th>
                    <th data-options="field:'attr1',width:250,editor:'textbox'">Attribute</th>
                    <th data-options="field:'status',width:120,align:'center',editor:{type:'checkbox',options:{on:'P',off:''}}">Status</th>
                </tr>
            </thead>
        </table>
     
        <div id="tb" style="height:auto">
            <a href="javascript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-add',plain:true" onclick="append()">Append</a>
            <a href="javascript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-remove',plain:true" onclick="removeit()">Remove</a>
            <a href="javascript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-save',plain:true" onclick="accept()">Accept</a>
            <a href="javascript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-undo',plain:true" onclick="reject()">Reject</a>
            <a href="javascript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-search',plain:true" onclick="getChanges()">GetChanges</a>
        </div>
        
        <script type="text/javascript">
       
        </script>
    </body>
    </html>