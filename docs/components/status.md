# Status

DaisyUI [Status](https://daisyui.com/components/status/) 的 Blade 封装。

## 用法

```blade
<x-dui::status color="success" />
```

## Props

| Prop | Type | Default | Values |
|------|------|---------|--------|
| color | string\|null | null | neutral, primary, secondary, accent, info, success, warning, error |
| size | string\|null | null | xs, sm, md, lg, xl |

## 示例

### 基础状态指示器

```blade
<x-dui::status />
```

### 不同颜色

```blade
<x-dui::status color="primary" />
<x-dui::status color="secondary" />
<x-dui::status color="accent" />
<x-dui::status color="info" />
<x-dui::status color="success" />
<x-dui::status color="warning" />
<x-dui::status color="error" />
```

### 不同尺寸

```blade
<x-dui::status color="success" size="xs" />
<x-dui::status color="success" size="sm" />
<x-dui::status color="success" size="md" />
<x-dui::status color="success" size="lg" />
```

### 配合文字使用

```blade
<div class="flex items-center gap-2">
    <x-dui::status color="success" size="sm" />
    <span>在线</span>
</div>
<div class="flex items-center gap-2">
    <x-dui::status color="error" size="sm" />
    <span>离线</span>
</div>
```

## 渲染结果

```html
<div class="status status-success status-sm"></div>
```
