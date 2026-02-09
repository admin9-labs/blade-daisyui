# Range

DaisyUI [Range](https://daisyui.com/components/range/) 的 Blade 封装。

## 用法

```blade
<x-dui::range min="0" max="100" value="40" />
```

## Props

| Prop | Type | Default | Values |
|------|------|---------|--------|
| color | string | null | neutral, primary, secondary, accent, success, warning, info, error |
| size | string | null | xs, sm, md, lg, xl |
| min | string | null | 任意数值 |
| max | string | null | 任意数值 |
| step | string | null | 任意数值 |

## 示例

### 基本用法
```blade
<x-dui::range min="0" max="100" value="40" />
```

### 带步进和刻度
```blade
<x-dui::range min="0" max="100" value="25" step="25" />
<div class="flex justify-between px-2.5 mt-2 text-xs">
  <span>|</span>
  <span>|</span>
  <span>|</span>
  <span>|</span>
  <span>|</span>
</div>
```

### 颜色
```blade
<x-dui::range color="primary" min="0" max="100" value="40" />
<x-dui::range color="secondary" min="0" max="100" value="40" />
<x-dui::range color="accent" min="0" max="100" value="40" />
<x-dui::range color="neutral" min="0" max="100" value="40" />
<x-dui::range color="success" min="0" max="100" value="40" />
<x-dui::range color="warning" min="0" max="100" value="40" />
<x-dui::range color="info" min="0" max="100" value="40" />
<x-dui::range color="error" min="0" max="100" value="40" />
```

### 尺寸
```blade
<x-dui::range size="xs" min="0" max="100" value="30" />
<x-dui::range size="sm" min="0" max="100" value="40" />
<x-dui::range size="md" min="0" max="100" value="50" />
<x-dui::range size="lg" min="0" max="100" value="60" />
<x-dui::range size="xl" min="0" max="100" value="70" />
```

## 渲染结果
```html
<input type="range" class="range" min="0" max="100" value="40" />
<input type="range" class="range range-primary" min="0" max="100" value="40" />
<input type="range" class="range range-lg" min="0" max="100" value="60" step="25" />
```
