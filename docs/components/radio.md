# Radio

DaisyUI [Radio](https://daisyui.com/components/radio/) 的 Blade 封装。

## 用法

```blade
<x-dui::radio name="radio-1" />
```

## Props

| Prop | Type | Default | Values |
|------|------|---------|--------|
| color | string | null | neutral, primary, secondary, accent, success, warning, info, error |
| size | string | null | xs, sm, md, lg, xl |

> 同一组 radio 应使用相同的 `name` 属性，避免与页面上其他 radio 组冲突。

## 示例

### 基本用法
```blade
<x-dui::radio name="radio-1" checked="checked" />
<x-dui::radio name="radio-1" />
```

### 颜色
```blade
<x-dui::radio name="r-primary" color="primary" checked="checked" />
<x-dui::radio name="r-secondary" color="secondary" checked="checked" />
<x-dui::radio name="r-accent" color="accent" checked="checked" />
<x-dui::radio name="r-neutral" color="neutral" checked="checked" />
<x-dui::radio name="r-success" color="success" checked="checked" />
<x-dui::radio name="r-warning" color="warning" checked="checked" />
<x-dui::radio name="r-info" color="info" checked="checked" />
<x-dui::radio name="r-error" color="error" checked="checked" />
```

### 尺寸
```blade
<x-dui::radio name="r-xs" size="xs" checked="checked" />
<x-dui::radio name="r-sm" size="sm" checked="checked" />
<x-dui::radio name="r-md" size="md" checked="checked" />
<x-dui::radio name="r-lg" size="lg" checked="checked" />
<x-dui::radio name="r-xl" size="xl" checked="checked" />
```

### 禁用
```blade
<x-dui::radio name="radio-disabled" disabled checked="checked" />
<x-dui::radio name="radio-disabled" disabled />
```

## 渲染结果
```html
<input type="radio" name="radio-1" class="radio" checked="checked" />
<input type="radio" name="radio-1" class="radio radio-primary" />
<input type="radio" name="radio-1" class="radio radio-lg" />
```
