# File Input

DaisyUI [File Input](https://daisyui.com/components/file-input/) 的 Blade 封装。

## 用法

```blade
<x-dui::file-input />
```

## Props

| Prop | Type | Default | Values |
|------|------|---------|--------|
| color | string | null | neutral, primary, secondary, accent, info, success, warning, error |
| size | string | null | xs, sm, md, lg, xl |
| ghost | bool | false | — |

## 示例

### 基本用法
```blade
<x-dui::file-input />
```

### Ghost 样式
```blade
<x-dui::file-input :ghost="true" />
```

### 颜色
```blade
<x-dui::file-input color="primary" />
<x-dui::file-input color="secondary" />
<x-dui::file-input color="accent" />
<x-dui::file-input color="neutral" />
<x-dui::file-input color="info" />
<x-dui::file-input color="success" />
<x-dui::file-input color="warning" />
<x-dui::file-input color="error" />
```

### 尺寸
```blade
<x-dui::file-input size="xs" />
<x-dui::file-input size="sm" />
<x-dui::file-input size="md" />
<x-dui::file-input size="lg" />
<x-dui::file-input size="xl" />
```

### 配合 Fieldset 和 Label 使用
```blade
<x-dui::fieldset>
  <x-dui::fieldset.legend>Pick a file</x-dui::fieldset.legend>
  <x-dui::file-input />
  <x-dui::label>Max size 2MB</x-dui::label>
</x-dui::fieldset>
```

### 禁用
```blade
<x-dui::file-input disabled />
```

## 渲染结果
```html
<input type="file" class="file-input" />
<input type="file" class="file-input file-input-primary" />
<input type="file" class="file-input file-input-lg file-input-ghost" />
```
