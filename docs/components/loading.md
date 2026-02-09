# Loading

DaisyUI [Loading](https://daisyui.com/components/loading/) 的 Blade 封装。

## 用法

```blade
<x-dui::loading />
```

## Props

| Prop | Type | Default | Values |
|------|------|---------|--------|
| type | string | spinner | spinner, dots, ring, ball, bars, infinity |
| size | string | null | xs, sm, md, lg, xl |

## 示例

### 基本用法
```blade
<x-dui::loading />
```

### 动画类型
```blade
<x-dui::loading type="spinner" />
<x-dui::loading type="dots" />
<x-dui::loading type="ring" />
<x-dui::loading type="ball" />
<x-dui::loading type="bars" />
<x-dui::loading type="infinity" />
```

### 尺寸
```blade
<x-dui::loading type="spinner" size="xs" />
<x-dui::loading type="spinner" size="sm" />
<x-dui::loading type="spinner" size="md" />
<x-dui::loading type="spinner" size="lg" />
<x-dui::loading type="spinner" size="xl" />
```

### 自定义颜色
```blade
<x-dui::loading type="spinner" class="text-primary" />
<x-dui::loading type="spinner" class="text-secondary" />
<x-dui::loading type="spinner" class="text-accent" />
<x-dui::loading type="spinner" class="text-info" />
<x-dui::loading type="spinner" class="text-success" />
<x-dui::loading type="spinner" class="text-warning" />
<x-dui::loading type="spinner" class="text-error" />
```

## 渲染结果
```html
<span class="loading loading-spinner loading-lg"></span>
```
