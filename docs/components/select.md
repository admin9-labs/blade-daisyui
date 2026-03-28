# Select

DaisyUI [Select](https://daisyui.com/components/select/) 的 Blade 封装。

## 用法

```blade
<x-dui::select>
  <option disabled selected>Pick one</option>
  <option>Option 1</option>
  <option>Option 2</option>
</x-dui::select>
```

## Props

| Prop | Type | Default | Values |
|------|------|---------|--------|
| color | string | null | neutral, primary, secondary, accent, info, success, warning, error |
| size | string | null | xs, sm, md, lg, xl |
| ghost | bool | false | — |
| validator | bool | false | 为元素添加 `validator` class |

## 示例

### 基本用法
```blade
<x-dui::select>
  <option disabled selected>Pick a color</option>
  <option>Crimson</option>
  <option>Amber</option>
  <option>Velvet</option>
</x-dui::select>
```

### Ghost 样式
```blade
<x-dui::select :ghost="true">
  <option disabled selected>Pick a font</option>
  <option>Inter</option>
  <option>Poppins</option>
  <option>Raleway</option>
</x-dui::select>
```

### 颜色
```blade
<x-dui::select color="primary">
  <option disabled selected>Pick one</option>
  <option>Option A</option>
  <option>Option B</option>
</x-dui::select>

<x-dui::select color="secondary">...</x-dui::select>
<x-dui::select color="accent">...</x-dui::select>
<x-dui::select color="neutral">...</x-dui::select>
<x-dui::select color="info">...</x-dui::select>
<x-dui::select color="success">...</x-dui::select>
<x-dui::select color="warning">...</x-dui::select>
<x-dui::select color="error">...</x-dui::select>
```

### 尺寸
```blade
<x-dui::select size="xs">...</x-dui::select>
<x-dui::select size="sm">...</x-dui::select>
<x-dui::select size="md">...</x-dui::select>
<x-dui::select size="lg">...</x-dui::select>
<x-dui::select size="xl">...</x-dui::select>
```

### 配合 Fieldset 和 Label 使用
```blade
<x-dui::fieldset>
  <x-dui::fieldset.legend>Browsers</x-dui::fieldset.legend>
  <x-dui::select>
    <option disabled selected>Pick a browser</option>
    <option>Chrome</option>
    <option>FireFox</option>
    <option>Safari</option>
  </x-dui::select>
  <x-dui::label>Optional</x-dui::label>
</x-dui::fieldset>
```

### 禁用
```blade
<x-dui::select disabled>
  <option>You can't touch this</option>
</x-dui::select>
```

### 验证态
```blade
<x-dui::select :validator="true" required>
  <option disabled selected value="">Choose one</option>
  <option>Corporate</option>
  <option>Business</option>
</x-dui::select>
<x-dui::validator.hint>Required</x-dui::validator.hint>
```

## 渲染结果
```html
<select class="select">
  <option disabled selected>Pick a color</option>
  <option>Crimson</option>
</select>
<select class="select select-primary">...</select>
<select class="select select-lg select-ghost">...</select>
<select class="select validator" required>...</select>
```

## 使用建议

### Best used for

- 选项数量有限且用户需要明显理解当前选择的场景
- 设置页和工具栏里较低强调度的配置切换
- 与 `neutral`、`validator` 组合形成稳定的后台表单风格

### Avoid when

- 在没有 label 的情况下单独放置 select
- 在低对比背景里直接使用 `ghost`
- 用 select 承载过长、过多的选项而不做分组或说明
