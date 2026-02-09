# Timeline

DaisyUI [Timeline](https://daisyui.com/components/timeline/) 的 Blade 封装。

## 用法

```blade
<x-dui::timeline>
    <li>
        <x-dui::timeline.start box>2023</x-dui::timeline.start>
        <x-dui::timeline.middle>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
            </svg>
        </x-dui::timeline.middle>
        <x-dui::timeline.end box>事件描述</x-dui::timeline.end>
        <hr />
    </li>
</x-dui::timeline>
```

## Props

### timeline (index)

| Prop | Type | Default | Values |
|------|------|---------|--------|
| snapIcon | bool | false | — |
| compact | bool | false | — |
| horizontal | bool | false | — |
| vertical | bool | false | — |

### timeline.start

| Prop | Type | Default | Values |
|------|------|---------|--------|
| box | bool | false | — |

### timeline.middle

无额外 Props。

### timeline.end

| Prop | Type | Default | Values |
|------|------|---------|--------|
| box | bool | false | — |

## 子组件

- `<x-dui::timeline.start>` — 时间线起始内容（左侧/上方）
- `<x-dui::timeline.middle>` — 时间线中间图标
- `<x-dui::timeline.end>` — 时间线结束内容（右侧/下方）

## 示例

### 垂直时间线

```blade
<x-dui::timeline>
    <li>
        <x-dui::timeline.start>2020</x-dui::timeline.start>
        <x-dui::timeline.middle>●</x-dui::timeline.middle>
        <x-dui::timeline.end box>项目启动</x-dui::timeline.end>
        <hr />
    </li>
    <li>
        <hr />
        <x-dui::timeline.start>2021</x-dui::timeline.start>
        <x-dui::timeline.middle>●</x-dui::timeline.middle>
        <x-dui::timeline.end box>发布 v1.0</x-dui::timeline.end>
        <hr />
    </li>
    <li>
        <hr />
        <x-dui::timeline.start>2022</x-dui::timeline.start>
        <x-dui::timeline.middle>●</x-dui::timeline.middle>
        <x-dui::timeline.end box>用户突破 10 万</x-dui::timeline.end>
    </li>
</x-dui::timeline>
```

### 水平时间线

```blade
<x-dui::timeline horizontal>
    <li>
        <x-dui::timeline.start box>第一步</x-dui::timeline.start>
        <x-dui::timeline.middle>●</x-dui::timeline.middle>
        <hr />
    </li>
    <li>
        <hr />
        <x-dui::timeline.start box>第二步</x-dui::timeline.start>
        <x-dui::timeline.middle>●</x-dui::timeline.middle>
        <hr />
    </li>
    <li>
        <hr />
        <x-dui::timeline.start box>第三步</x-dui::timeline.start>
        <x-dui::timeline.middle>●</x-dui::timeline.middle>
    </li>
</x-dui::timeline>
```

### 紧凑模式

```blade
<x-dui::timeline compact>
    <li>
        <x-dui::timeline.middle>●</x-dui::timeline.middle>
        <x-dui::timeline.end box>事件一</x-dui::timeline.end>
        <hr />
    </li>
    <li>
        <hr />
        <x-dui::timeline.middle>●</x-dui::timeline.middle>
        <x-dui::timeline.end box>事件二</x-dui::timeline.end>
    </li>
</x-dui::timeline>
```

### 带 snap-icon

```blade
<x-dui::timeline snap-icon>
    <li>
        <x-dui::timeline.middle>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
            </svg>
        </x-dui::timeline.middle>
        <x-dui::timeline.end box>已完成</x-dui::timeline.end>
        <hr />
    </li>
</x-dui::timeline>
```

## 渲染结果

```html
<ul class="timeline timeline-horizontal">
    <li>
        <div class="timeline-start timeline-box">第一步</div>
        <div class="timeline-middle">●</div>
        <hr />
    </li>
</ul>
```
