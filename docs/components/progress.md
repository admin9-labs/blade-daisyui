# Progress

DaisyUI [Progress](https://daisyui.com/components/progress/) 的 Blade 封装。

## 用法

```blade
<x-dui::progress :value="70" />
```

## Props

| Prop | Type | Default | Values |
|------|------|---------|--------|
| color | string | null | neutral, primary, secondary, accent, info, success, warning, error |
| value | int | null | 0-100 (省略则显示不确定状态动画) |
| max | int | 100 | 任意正整数 |

## 示例

### 基本用法
```blade
<x-dui::progress :value="0" class="w-56" />
<x-dui::progress :value="40" class="w-56" />
<x-dui::progress :value="70" class="w-56" />
<x-dui::progress :value="100" class="w-56" />
```

### 颜色
```blade
<x-dui::progress color="primary" :value="40" class="w-56" />
<x-dui::progress color="secondary" :value="40" class="w-56" />
<x-dui::progress color="accent" :value="40" class="w-56" />
<x-dui::progress color="neutral" :value="40" class="w-56" />
<x-dui::progress color="info" :value="40" class="w-56" />
<x-dui::progress color="success" :value="40" class="w-56" />
<x-dui::progress color="warning" :value="40" class="w-56" />
<x-dui::progress color="error" :value="40" class="w-56" />
```

### 不确定状态（不传 value）
```blade
<x-dui::progress class="w-56" />
```

### 自定义最大值
```blade
<x-dui::progress :value="25" :max="50" class="w-56" />
```

## 渲染结果
```html
<progress class="progress progress-primary" value="40" max="100"></progress>
```
