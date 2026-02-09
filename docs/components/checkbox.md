# Checkbox

DaisyUI [Checkbox](https://daisyui.com/components/checkbox/) 的 Blade 封装。

## 用法

```blade
<x-dui::checkbox />
```

## Props

| Prop | Type | Default | Values |
|------|------|---------|--------|
| color | string | null | primary, secondary, accent, neutral, success, warning, info, error |
| size | string | null | xs, sm, md, lg, xl |

## 示例

### 基本用法
```blade
<x-dui::checkbox checked="checked" />
```

### 颜色
```blade
<x-dui::checkbox color="primary" checked="checked" />
<x-dui::checkbox color="secondary" checked="checked" />
<x-dui::checkbox color="accent" checked="checked" />
<x-dui::checkbox color="neutral" checked="checked" />
<x-dui::checkbox color="success" checked="checked" />
<x-dui::checkbox color="warning" checked="checked" />
<x-dui::checkbox color="info" checked="checked" />
<x-dui::checkbox color="error" checked="checked" />
```

### 尺寸
```blade
<x-dui::checkbox size="xs" checked="checked" />
<x-dui::checkbox size="sm" checked="checked" />
<x-dui::checkbox size="md" checked="checked" />
<x-dui::checkbox size="lg" checked="checked" />
<x-dui::checkbox size="xl" checked="checked" />
```

### 配合 Fieldset 和 Label 使用
```blade
<x-dui::fieldset class="bg-base-100 border-base-300 rounded-box w-64 border p-4">
  <x-dui::fieldset.legend>Login options</x-dui::fieldset.legend>
  <x-dui::label>
    <x-dui::checkbox checked="checked" />
    Remember me
  </x-dui::label>
</x-dui::fieldset>
```

### 禁用
```blade
<x-dui::checkbox disabled />
<x-dui::checkbox disabled checked="checked" />
```

## 渲染结果
```html
<input type="checkbox" class="checkbox" />
<input type="checkbox" class="checkbox checkbox-primary" />
<input type="checkbox" class="checkbox checkbox-lg" />
```
