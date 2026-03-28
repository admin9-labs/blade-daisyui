# Table

DaisyUI [Table](https://daisyui.com/components/table/) 的 Blade 封装。

## 用法

```blade
<x-dui::table>
    <thead>
        <tr>
            <th>名称</th>
            <th>邮箱</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>张三</td>
            <td>zhangsan@example.com</td>
        </tr>
    </tbody>
</x-dui::table>
```

## Props

| Prop | Type | Default | Values |
|------|------|---------|--------|
| zebra | bool | false | — |
| pinRows | bool | false | — |
| pinCols | bool | false | — |
| size | string\|null | null | xs, sm, md, lg, xl |

## 示例

### 基础表格

```blade
<x-dui::table>
    <thead>
        <tr>
            <th>#</th>
            <th>名称</th>
            <th>职位</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>1</th>
            <td>张三</td>
            <td>前端工程师</td>
        </tr>
        <tr>
            <th>2</th>
            <td>李四</td>
            <td>后端工程师</td>
        </tr>
    </tbody>
</x-dui::table>
```

### 斑马纹

```blade
<x-dui::table :zebra="true">
    <thead>
        <tr>
            <th>#</th>
            <th>名称</th>
        </tr>
    </thead>
    <tbody>
        <tr><th>1</th><td>张三</td></tr>
        <tr><th>2</th><td>李四</td></tr>
        <tr><th>3</th><td>王五</td></tr>
    </tbody>
</x-dui::table>
```

### 固定行头和列头

```blade
<x-dui::table :pin-rows="true" :pin-cols="true">
    <thead>
        <tr>
            <th>名称</th>
            <td>A</td>
            <td>B</td>
            <td>C</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>张三</th>
            <td>100</td>
            <td>200</td>
            <td>300</td>
        </tr>
    </tbody>
</x-dui::table>
```

### 不同尺寸

```blade
<x-dui::table size="xs">
    {{-- 紧凑表格 --}}
</x-dui::table>

<x-dui::table size="lg">
    {{-- 宽松表格 --}}
</x-dui::table>
```

## 渲染结果

```html
<table class="table table-zebra table-pin-rows table-pin-cols table-xs">
    <thead>
        <tr>
            <th>名称</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>张三</td>
        </tr>
    </tbody>
</table>
```

## 使用建议

### Best used for

- 操作后台、审计页、列表页中的结构化数据
- 需要 `zebra`、尺寸控制、固定头行/列的场景
- 放在 card / panel 中，与标题和状态提示形成完整模块

### Avoid when

- 把表格直接扔在空白页面上，不提供容器和标题上下文
- 在每行里同时堆太多按钮、badge、状态点
- 忽略窄屏下的行高、换行和横向滚动策略
