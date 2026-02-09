# Toggle

DaisyUI [Toggle](https://daisyui.com/components/toggle/) 的 Blade 封装。

## 用法

```blade
<x-dui::toggle checked="checked" />
```

## Props

| Prop | Type | Default | Values |
|------|------|---------|--------|
| color | string | null | primary, secondary, accent, neutral, success, warning, info, error |
| size | string | null | xs, sm, md, lg, xl |

## 示例

### 基本用法
```blade
<x-dui::toggle checked="checked" />
```

### 颜色
```blade
<x-dui::toggle color="primary" checked="checked" />
<x-dui::toggle color="secondary" checked="checked" />
<x-dui::toggle color="accent" checked="checked" />
<x-dui::toggle color="neutral" checked="checked" />
<x-dui::toggle color="info" checked="checked" />
<x-dui::toggle color="success" checked="checked" />
<x-dui::toggle color="warning" checked="checked" />
<x-dui::toggle color="error" checked="checked" />
```

### 尺寸
```blade
<x-dui::toggle size="xs" checked="checked" />
<x-dui::toggle size="sm" checked="checked" />
<x-dui::toggle size="md" checked="checked" />
<x-dui::toggle size="lg" checked="checked" />
<x-dui::toggle size="xl" checked="checked" />
```

### 配合 Fieldset 和 Label 使用
```blade
<x-dui::fieldset class="bg-base-100 border-base-300 rounded-box w-64 border p-4">
  <x-dui::fieldset.legend>Login options</x-dui::fieldset.legend>
  <x-dui::label>
    <x-dui::toggle checked="checked" />
    Remember me
  </x-dui::label>
</x-dui::fieldset>
```

### 禁用
```blade
<x-dui::toggle disabled />
<x-dui::toggle disabled checked="checked" />
```

## 渲染结果
```html
<input type="checkbox" class="toggle" checked="checked" />
<input type="checkbox" class="toggle toggle-primary" checked="checked" />
<input type="checkbox" class="toggle toggle-lg" />
```
